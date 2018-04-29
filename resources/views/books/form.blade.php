{{ csrf_field() }} 
Title: <br>
<input type="text" name="title" value="{{ @$book ? $book->title : '' }}">
<br>
Genre: <br>
<input type="text" name="genre" value="{{ @$book ? $book->genre : '' }}">
<br>
Publication Date: <br>
<input type="text" name="publication_date" value="{{ @$book ? $book->publication_date : '' }}">
<br>
<button class="button" type="submit button">Add Book</button>