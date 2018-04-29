{{ csrf_field() }} 
Title: <br>
<input type="text" name="title" value="{{ @$animeTable ? $animeTable->title : '' }}">
<br>
Genre: <br>
<input type="text" name="genre" value="{{ @$animeTable ? $animeTable->genre : '' }}">
<br>
Number of Episodes: <br>
<input type="text" name="episodes" value="{{ @$animeTable ? $animeTable->episodes : '' }}">
<br>
<button class="button" type="submit button">Submit</button>