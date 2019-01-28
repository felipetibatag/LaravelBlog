  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" value="{{isset($post)?$post->author:''}}" class="form-control" id="author" placeholder="Enter Author">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{isset($post)?$post->name:''}}" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="author">Description</label>
    <textarea class="form-control"  rows=5' name ="description" placeholder="Enter Description">
    {{isset($post)?$post->description:''}}
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>