{{ csrf_field() }} 
Title: <br>
<input type="text" name="title" value="{{ @$game ? $game->title : '' }}">
<br>
Genre: <br>
<input type="text" name="genre" value="{{ @$game ? $game->genre : '' }}">
<br>
Release Date: <br>
<input type="text" name="release_date" value="{{ @$game ? $game->release_date : '' }}">
<br>
<button class="button" type="submit button">Submit</button>
