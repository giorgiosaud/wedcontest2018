<?php

namespace App\Http\Controllers;

use App\Artwork;
use App\Category;
use App\Contest;
use Illuminate\Http\Request;

class ArtworkApiController extends Controller
{
	public function index(){
		$activeContest=Contest::whereActive(true)->first();
		$catsId=$activeContest->categories->pluck('id');
		$artworks=Artwork::whereIn('category_id',$catsId)->get();
		return $artworks;
	}
	public function show(Contest $contest){
		$contest->load('categories.artworks')->get();
		$catsId=$contest->categories->pluck('id');
		$artworks=Artwork::whereIn('category_id',$catsId)->get();
		return $artworks;
	}
}
