<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;
class CounterController extends Controller
{
		public function updateCounter(Request $request) {
			$mc1 = $request->mc1;
			$mc2 = $request->mc2;
			$mc3 = $request->mc3;
			$mc4 = $request->mc4;
			$counter_model = new Counter();
			$counter = $counter_model->get()->toArray();
			$mc1_counter = $counter[0]['mc1'];
			$mc2_counter = $counter[0]['mc2'];
			$mc3_counter = $counter[0]['mc3'];
			$mc4_counter = $counter[0]['mc4'];

			if($mc1 == 1) {
				$mc1_counter += 1;
			}
			if($mc2 == 1) {
				$mc2_counter += 1;
			}
			if($mc3 == 1) {
				$mc3_counter += 1;
			}
			if($mc4 == 1) {
				$mc4_counter += 1;
			}

			$counter_model->where('id','=',1)->update([
				'mc1' => $mc1_counter,
				'mc2' => $mc2_counter,
				'mc3' => $mc3_counter,
				'mc4' => $mc4_counter
			]);
			return response()->json(['data' => 'Success'], 200);
		}

		public function getCounter() {
			$counter_model = new Counter();
			$counter = $counter_model->get()->toArray();
			$mc1_counter = $counter[0]['mc1'];
			$mc2_counter = $counter[0]['mc2'];
			$mc3_counter = $counter[0]['mc3'];
			$mc4_counter = $counter[0]['mc4'];
			return response()->json(['data' => 'Success','mc1' => $mc1_counter,
				'mc2' => $mc2_counter,'mc3' => $mc3_counter, 'mc4' => $mc4_counter], 200);
		}
}
