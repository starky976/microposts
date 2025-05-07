<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     *
     * @param  $micropostId  お気に入り登録する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        \Auth::user()->favorite($micropostId);
        return back()->with([
            'message' => 'お気に入りに追加しました。',
        ]);
    }
    /**
     * 投稿をお気に入り解除するアクション。
     *
     * @param  $$micropostId  お気に入り解除する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        \Auth::user()->unFavorite($micropostId);
        return back()->with([
            'message' => 'お気に入りから削除しました。',
        ]);
    }
}
