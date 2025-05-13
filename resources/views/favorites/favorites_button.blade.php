@if (Auth::id() !== $micropost->user_id)
    @if (Auth::user()->is_favorite($micropost->id))
        <div>
            {{-- お気に入り登録削除ボタンのフォーム --}}
            <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline btn-sm normal-case"
                    onclick="return confirm('Delete id = {{ $micropost->id }} ?')">unFavorite</button>
            </form>
        </div>
    @else
        <div>
            {{-- お気に入り登録ボタンのフォーム --}}
            <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
                @csrf
                <button type="submit" class="btn btn-accent btn-sm normal-case"
                    onclick="return confirm('Favorite id = {{ $micropost->id }} ?')">favorite</button>
            </form>
        </div>
    @endif
@endif
