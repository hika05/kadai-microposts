<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りに追加するアクション。
     
     */
    public function store($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 micropostの投稿をお気に追加
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * お気に入りを削除するアクション。
     *
     */
    public function destroy($micropost)
    {
        // 認証済みユーザ（閲覧者）が、お気に削除
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }

}
