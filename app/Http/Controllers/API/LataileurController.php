<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;


class LataileurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=packages::paginate(2);
        return response()->json($datas);
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
        $validasi=$request::validate([
            'id'=> 'required | numeric',
            'user_id'=> 'required',
            'title'=> '',
            'description'=>'',
            'cover'=>'required|file|mimes:png,jpg,jpng'
        ]);
        try{
            $fileName = time().request->file('cover')->getClientOriginalName();
            $path = $request->file('cover')->storeAs('uploads/beritas',$fileName);
            $validasi['cover']=$path;
            $response = packages::create($validasi);
            return response()-> json([
                'succes'=>'true',
                'message'=>'success',
                'body'=>$response
            ]);
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
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
    public function update(Request $request, $user_id)
    {
        $validasi = $request->validate([
            'id'=>'required',
            'user_id'=>'required',
            'title'=> 'required',
            'cover' => '',
            'description' => 'required',
        ]);

        try{
            if($request->file('cover')){
                $fileName = time() .$request -> file('cover')->getClientOriginalName();
                $path = $request->file('cover')->storeAs('cover/beritas', $fileName);
                $validasi ['cover']=$path;
            }
            $response = Beritas::where('user_id',$user_id);
            $response->update($validasi);
            return response()->json([
                    'succes'=>true,
                    'message'=>'success',
                    'body'=> $response
                ]);
            } catch (\exception $e){
                return response()->json([
                    //'succes'=>false,
                    'message'=>'error',
                    'errors'=>$th->getMessage()

                ]);
            }
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
}