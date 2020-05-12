<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PhotoRepository;

class PhotoController extends Controller
{
    public function __construct(PhotoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index() {
        return view('photo.index', [
            'photos' => $this->repository->allPhotos()
        ]);
    }

    public function show($slug) {
        $photo = $this->repository->forSlug($slug);
        abort_unless($photo, 404, 'Photo ');
        return view('photo.show', compact('photo'));
    }
}
