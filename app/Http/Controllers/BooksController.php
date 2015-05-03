<?php namespace VotaUnLibro\Http\Controllers;

use VotaUnLibro\Http\Requests;
use VotaUnLibro\Http\Controllers\Controller;
use VotaUnLibro\Book;

use Illuminate\Http\Request;

class BooksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::all();
		return view('books.index',compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$book = Book::find($id);
		$reviews = $book->reviews;
		return view('books.show',compact('book','reviews'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Search for coincidences on the db
	 *
	 * @param  string $search_params
	 * @return Response
	 */
	public function search(Request $request){
		$input = $request->input('s');
		$books = Book::where('title','LIKE',"%$input%")->get();
		return view('books.search',compact('books'));
	}

}
