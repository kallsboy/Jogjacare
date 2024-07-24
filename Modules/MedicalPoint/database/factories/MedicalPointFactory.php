<?php

namespace Modules\MedicalPoint\database\factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\MedicalPoint\Models\MedicalPoint>
 */
class MedicalPointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\MedicalPoint\Models\MedicalPoint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $districts = ['Bantul', 'Gunungkidul', 'Kulon Progo', 'Sleman', 'Kota Yogyakarta'];
        $district = $this->faker->randomElement($districts);

        $subDistricts = [
            'Bantul' => ['Bambanglipuro', 'Bantul', 'Dlingo', 'Imogiri', 'Jetis', 'Kasihan', 'Kretek', 'Pajangan', 'Pandak', 'Piyungan', 'Pleret', 'Pundong', 'Sanden', 'Sedayu', 'Sewon', 'Srandakan'],
            'Gunungkidul' => ['Gedangsari', 'Girisubo', 'Karangmojo', 'Ngawen', 'Nglipar', 'Paliyan', 'Panggang', 'Patuk', 'Playen', 'Ponjong', 'Purwosari', 'Rongkop', 'Saptosari', 'Semanu', 'Semin', 'Tanjungsari', 'Tepus', 'Wonosari'],
            'Kulon Progo' => ['Galur', 'Girimulyo', 'Kalibawang', 'Kokap', 'Lendah', 'Nanggulan', 'Panjatan', 'Pengasih', 'Samigaluh', 'Sentolo', 'Temon', 'Wates'],
            'Sleman' => ['Berbah', 'Cangkringan', 'Depok', 'Gamping', 'Godean', 'Kalasan', 'Minggir', 'Mlati', 'Moyudan', 'Ngaglik', 'Ngemplak', 'Pakem', 'Prambanan', 'Seyegan', 'Sleman', 'Tempel', 'Turi'],
            'Kota Yogyakarta' => ['Danurejan', 'Gedongtengen', 'Gondokusuman', 'Gondomanan', 'Jetis', 'Kotagede', 'Kraton', 'Mantrijeron', 'Mergangsan', 'Ngampilan', 'Pakualaman', 'Tegalrejo', 'Umbulharjo', 'Wirobrajan']
        ];

        return [
            'name' => $this->faker->company,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'intro' => $this->faker->paragraph,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['Clinic', 'Public health center', 'Pharmacy']),
            'district' => $district,
            'sub_district' => $this->faker->randomElement($subDistricts[$district]),
            'address' => $this->faker->address,
            'maps' => $this->faker->url,
            'contact' => $this->faker->phoneNumber,
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->paragraph,
            'meta_keywords' => $this->faker->words(5, true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}