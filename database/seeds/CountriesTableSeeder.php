<?php

	use Illuminate\Database\Seeder;
	use App\Country;

	class CountriesTableSeeder extends Seeder {

		public function run()
		{
			DB::table('countries')->truncate();

			$countriesJson = File::get(base_path() . "/database/seeds/countries.json");
			$countries = json_decode($countriesJson);
			foreach ($countries as $country) {
				Country::create(array(
					'capital'           => $country->capital,
					'citizenship'       => $country->citizenship,
					'country_code'      => $country->country_code,
					'currency'          => $country->currency,
					'currency_code'     => $country->currency_code,
					'currency_sub_unit' => $country->currency_sub_unit,
					'full_name'         => $country->full_name,
					'iso_3166_2'        => $country->iso_3166_2,
					'iso_3166_3'        => $country->iso_3166_3,
					'name'              => $country->name,
					'region_code'       => $country->region_code,
					'sub_region_code'   => $country->sub_region_code,
					'eea'               => $country->eea,
					'calling_code'      => $country->calling_code,
				));
			}
		}

	}