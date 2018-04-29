{{ csrf_field() }} 
Title: <br>
<input type="text" name="title" value="{{ @$anime ? $anime->title : '' }}">
<br>
Genre: <br>
<input type="text" name="genre" value="{{ @$anime ? $anime->genre : '' }}">
<br>
Number of Episodes: <br>
<input type="text" name="episodes" value="{{ @$anime ? $anime->episodes : '' }}">
<br>
<button class="button" type="submit button">Submit</button>