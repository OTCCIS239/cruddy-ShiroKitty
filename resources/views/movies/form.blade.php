{{ csrf_field() }} 
Title: <br>
<input type="text" name="title" value="{{ @$movie ? $movie->title : '' }}">
<br>
Genre: <br>
<input type="text" name="genre" value="{{ @$movie ? $movie->genre : '' }}">
<br>
Runtime: <br>
<input type="text" name="runtime" value="{{ @$movie ? $movie->runtime : '' }}">
<br>
<button class="button" type="submit button">Submit</button>