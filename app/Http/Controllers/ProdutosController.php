<?php

namespace DemoLaravel\Http\Controllers;

use DemoLaravel\ApiBook;
use DemoLaravel\Book;
use Illuminate\Http\Request;
use DemoLaravel\Http\Requests;
use DemoLaravel\Http\Controllers\Controller;
use DemoLaravel\Produto;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::paginate(20);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import()
    {
        $page = 1;
        $api = new ApiBook;
        $dataSet = $api->getBooks('php');

        while (intval($dataSet->Total) > 0)
        {
            foreach ($dataSet->Books as $row)
            {
                $book = $api->getBook($row->ID);
                $data = [
                    'isbn' => $book->ISBN,
                    'title' => $book->Title,
                    'subtitle' => $book->SubTitle,
                    'description' => $book->Description,
                    'author' => $book->Author,
                    'pages' => $book->Page,
                    'year' => $book->Year,
                    'publisher' => $book->Publisher,
                    'image' => $book->Image
                ];
                Book::create($data);
            }

            $page++;
            $dataSet = $api->getBooks('php', $page);
        }

        return true;
    }
}
