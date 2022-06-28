<?php

namespace App\Http\Controllers;

use App\Models\Traits\PropertyAccessor;
use App\Models\User;
use Carbon\Traits\Test;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Tests\CreatesApplication;

class DailyReportController extends Controller
{
    use PropertyAccessor;
    use Test;
    use CreatesApplication;

    /**
     * @return Response
     */
    public function dashboard(): Response
    {
        $users = User::all();

        return Inertia::render('Dashboard', compact('users'));
    }


    public function index()
    {
        if (random_int(1, 2) === 1) {
            return;
        }
        echo 12012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012012001;
    }

//        $client = new S3Client();
//        return $this->fileRepository->store($client->uploadFile($uploadedFile, $path));

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
}
