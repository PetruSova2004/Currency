<?php

namespace App\Http\Controllers\Pub\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Post\UpdateRequest;
use App\Imports\PostImport;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = User::query()->where('id', Auth::user()->getAuthIdentifier())->first();
        $posts = $user->posts;
        return view('Pub.Post.index', compact('posts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'required|file|max:2500',
        ]);
        $file = $request->file('file');
        Excel::import(new PostImport(Auth::user()->getAuthIdentifier()),$file);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View | RedirectResponse
    {
        $post = Post::query()->where('id', $id)->first();
        if ($post) {
            return view('Pub.Post.show', compact('post'));
        } else {
            return redirect()->back()->with('error', 'Oops, Something goes wrong');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View | RedirectResponse
    {
        $post = Post::query()->where('id', $id)->first();
        if ($post) {
            return view('Pub.Post.edit', compact('post'));
        } else {
            return redirect()->back()->with('error', 'Oops, Something goes wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $request->validated();
        $post = Post::query()->where('id', $id)->first();
        if ($post) {
            $post->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
            return redirect()->route('post.index');
        } else {
            return redirect()->back()->with('error', 'Oops, Something goes wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $post = Post::query()->where('id', $id)->first();
        if ($post) {
            $post->delete();
            return redirect()->route('post.index');
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }
}
