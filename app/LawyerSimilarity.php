<?php declare(strict_types=1);

namespace App;

use Exception;

class LawyerSimilarity
{
    protected $lawyers       = [];
    protected $locationWeight    = 1;
    protected $specializationWeight  = 1;
    protected $experienceWeight = 1;
    // protected $priceHighRange = 1000;

    public function __construct(array $lawyers)
    {
        $this->lawyers       = $lawyers;
        // $this->priceHighRange = max(array_column($lawyers, 'price'));
    }

    public function setSpecializationWeight(float $weight): void
    {
        $this->$specializationWeight = $weight;
    }

    public function setlocationWeight(float $weight): void
    {
        $this->$specializationWeight = $weight;
    }

    public function setexperienceWeight(float $weight): void
    {
        $this->$specializationWeight = $weight;
    }

    public function calculateSimilarityMatrix(): array
    {
        $matrix = [];

        foreach ($this->lawyers as $lawyer) {

            $similarityScores = [];

            foreach ($this->lawyers as $_lawyer) {
                if ($lawyer->id === $_lawyer->id) {
                    continue;
                }
                $similarityScores['lawyer_id_' . $_lawyer->id] = $this->calculateSimilarityScore($lawyer, $_lawyer);
            }
            $matrix['lawyer_id_' . $lawyer->id] = $similarityScores;
        }
        return $matrix;
    }

    public function getlawyersSortedBySimularity(int $lawyerId, array $matrix): array
    {
        $similarities   = $matrix['lawyer_id_' . $lawyerId] ?? null;
        $sortedlawyers = [];

        if (is_null($similarities)) {
            throw new Exception('Can\'t find lawyer with that ID.');
        }
        arsort($similarities);

        foreach ($similarities as $lawyerIdKey => $similarity) {
            $id       = intval(str_replace('lawyer_id_', '', $lawyerIdKey));
            $lawyers = array_filter($this->lawyers, function ($lawyer) use ($id) { return $lawyer->id === $id; });
            if (! count($lawyers)) {
                continue;
            }
            $lawyer = $lawyers[array_keys($lawyers)[0]];
            $lawyer->similarity = $similarity;
            $sortedlawyers[] = $lawyer;
        }
        return $sortedlawyers;
    }

    protected function calculateSimilarityScore($lawyerA, $lawyerB)
    {
        $lawyerAFeatures = implode('', get_object_vars($lawyerA->features));
        $lawyerBFeatures = implode('', get_object_vars($lawyerB->features));

        return array_sum([
            (Similarity::hamming($lawyerAFeatures, $lawyerBFeatures) * $this->featureWeight),
            (Similarity::euclidean(
                Similarity::minMaxNorm([$lawyerA->price], 0, $this->priceHighRange),
                Similarity::minMaxNorm([$lawyerB->price], 0, $this->priceHighRange)
            ) * $this->priceWeight),
            (Similarity::jaccard($lawyerA->categories, $lawyerB->categories) * $this->categoryWeight)
        ]) / ($this->featureWeight + $this->priceWeight + $this->categoryWeight);
    }
}
