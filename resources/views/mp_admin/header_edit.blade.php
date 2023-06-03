@include('mp_admin.header')
            <div class="container-fluid">
                <h2>Header Image Master</h2>
                <div class="row">
                    <div class="col-md-12">
                    @foreach($header_edit as $key => $data)
                    <form action="header_update" method="post" enctype="multipart/form-data">
                         @csrf
                            <div class="row">
                            <input type="hidden" name="header_id" value="{{ $data->id }}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="headerTitle1">Header Title 1</label>
                                        <input type="text" name="header_title1" class="form-control" id="headerTitle1" value="{{ $data->title_first }}" aria-describedby="emailHelp" placeholder="Enter Title 1" required>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="headerTitle2">Header Title 2</label>
                                        <input type="text" name="header_title2" class="form-control" id="headerTitle2" value="{{ $data->title_second }}" placeholder="Enter Title 2" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Header Image</label>
                                        <input type="file" name="header_img" class="form-control" id="file" value="{{ $data->header_img }}" placeholder="Enter Title 2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span style="margin-bottom: .5rem;">Visible / Unvisible</span>
                                    <div class="form-group form-check mycheck">
                                        <input type="checkbox" name="header_check" class="form-check-input" id="exampleCheck1" @if($data->show_hide) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" name="header_submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                    @endforeach
                </div>

            
            </div>
                       
            <hr>
    
         
                
            
         

        </div>














        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
</body>

</html>