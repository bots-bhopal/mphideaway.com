@include('mp_admin.header')
            <div class="container-fluid">
            <div id = 'msg'></div>
                <h2>Category Master Form</h2>
                <div class="row">
                    <div class="col-md-12">
                    <form action="category_insert" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select name="cat_type" class="form-control" id="exampleFormControlSelect1">
                                          <option value="0">Select anyOne</option>
                                          <option value="Package">Package</option>
                                          <option value="Wildlife & Nature">Wildlife & Nature</option>
                                          <option value="Haritage & Pilgrimage">Haritage & Pilgrimage</option>
                                          <option value="Jal Mahoutsav">Jal Mahoutsav</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Header Title 2</label>
                                        <input name="cat_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Title 2" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <span style="    margin-bottom: .5rem;">Visible / Unvisible</span>
                                    <div class="form-group form-check" style="display: block;
                                        width: 100%;
                                        padding: .375rem .75rem;
                                        padding-left: 40px;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                        <input name="cat_check" type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

            <hr>
            <div class="container-fluid">
                <h2>Category Master Detail</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Title 1
                            </th>
                            <th>
                                Title 2
                            </th>
                            <th>
                                Show
                            </th>
                            <th colspan="2">
                                Action
                            </th>
                        </tr>
                        <tbody>
                        @foreach($category as $key => $data)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data->cat_type }}</td>
                                <td>{{ $data->cat_name }}</td>
                                <td>{{ $data->show_hide }}</td>
                                <td> 
                                <form action="category_edit" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}"> 
                                <input name="submit" class="btn btn-primary" type="submit" value="edit" />
                                </form>
                                </td>
                                <td>
                                <form action="category_delete" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}"> 
                                <input name="submit" class="btn btn-danger" type="submit" value="Delete" />
                                </form>
                                
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </thead>
                </table>
            </div>




        </div>














        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
 
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
         function getMessage() {
 
           
         }

      </script>
</body>

</html>