@include('mp_admin.header')
            <div class="container-fluid">
                <h2>Category Master Form</h2>

                <div class="row">
                    <div class="col-md-12">
                    <form action="package_insert" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="package_type">Type</label>
                                        <select onChange="getMessage()" name="package_type" class="form-control" id="package_type">
                                        <option value="0">Select anyOne</option>
                                          <option value="Package">Package</option>
                                          <option value="Wildlife & Nature">Wildlife & Nature</option>
                                          <option value="Haritage & Pilgrimage">Heritage & Pilgrimage</option>
                                          <option value="Jal Mahoutsav">Jal Mahoutsav</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="msg">Category</label>
                                        <select name="package_category" class="form-control" id="msg">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PackageTitle">Package Title </label>
                                        <input name="PackageTitle" type="text" class="form-control" id="PackageTitle" placeholder="Enter Title 2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PackageAmount">Package Amount</label>
                                        <input name="PackageAmount" type="text" class="form-control" id="PackageAmount" placeholder="Enter Title 2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PackageImage">Package Image</label>
                                        <input name="PackageImage" type="file" class="form-control" id="PackageImage" placeholder="Enter Title 2" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span style=" margin-bottom: .5rem;">Visible / Unvisible</span>
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
                                        <input name="package_show_hide" type="checkbox" class="form-check-input" id="package_show_hide">
                                        <label class="form-check-label" for="package_show_hide">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Highlight">Highlight</label>
                                        <textarea name="Highlight" class="form-control" id="Highlight" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="overview">Example textarea</label>
                                        <textarea name="overview" id="overview" class="form-control" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="SubCategory">Sub Category</label>
                                        <select name="SubCategory" class="form-control" id="SubCategory">
                                          <option value="">Select Sub Category</option>
                                          <option value="family&group">Family & Group</option>
                                          <option value="Friends">Friends</option>
                                          <option value="honeymoon">Honeymoon</option>
                                          <option value="adventure">Adventure</option>
                                          <option value="heritage&pilgrimage">Heritage & Pilgrimage</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="margin-bottom: .5rem;">Flights</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Flights" value="flights" type="checkbox" class="form-check-input" id="Flights">
                                        <label class="form-check-label" for="Flights">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Hotels</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Hotels" value="hotels" type="checkbox" class="form-check-input" id="Hotels">
                                        <label class="form-check-label" for="Hotels">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Sight-seen</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Sight_seen" value="sight seen" type="checkbox" class="form-check-input" id="Sight_seen">
                                        <label class="form-check-label" for="Sight_seen">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Transfers</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Transfers" value="transfers" type="checkbox" class="form-check-input" id="Transfers">
                                        <label class="form-check-label" for="Transfers">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Meals</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Meals" value="meals" type="checkbox" class="form-check-input" id="Meals">
                                        <label class="form-check-label" for="Meals">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Bike Tour</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="BikeTour" value="bike tour" type="checkbox" class="form-check-input" id="BikeTour">
                                        <label class="form-check-label" for="BikeTour">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Cruise Tour</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="CruiseTour" value="cruise tour" type="checkbox" class="form-check-input" id="CruiseTour">
                                        <label class="form-check-label" for="CruiseTour">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Water Spots</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="WaterSpots" value="water spots" type="checkbox" class="form-check-input" id="WaterSpots">
                                        <label class="form-check-label" for="WaterSpots">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Adventure Sports</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="AdventureSports" value="adventure sport" type="checkbox" class="form-check-input" id="AdventureSports">
                                        <label class="form-check-label" for="AdventureSports">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Camp Stays</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="CampStays" value="camp stays" type="checkbox" class="form-check-input" id="CampStays">
                                        <label class="form-check-label" for="CampStays">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style=" margin-bottom: .5rem;">Trekking</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Trekking" value="trekking" type="checkbox" class="form-check-input" id="Trekking">
                                        <label class="form-check-label" for="Trekking">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Om</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Om" value="om" type="checkbox" class="form-check-input" id="Om">
                                        <label class="form-check-label" for="Om">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Gurudwara</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Gurudwara" value="gurudwara" type="checkbox" class="form-check-input" id="Gurudwara">
                                        <label class="form-check-label" for="Gurudwara">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Church</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Church" value="church" type="checkbox" class="form-check-input" id="Church">
                                        <label class="form-check-label" for="Church">Check me out</label>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
                            Peckage Name
                            </th>
                            <th>
                            Type
                            </th>
                            <th>
                            Category
                            </th>
                            <th>
                            Amount
                            </th>
                            <th>
                            Images
                            </th>
                            <th>
                                Show
                            </th>
                            <th colspan="2">
                                Action
                            </th>
                        </tr>
                        <tbody>
                        @foreach($package as $key => $data)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data->package_title }}</td>
                                <!-- <td> echo nl2br($data->example_textarea);</td> -->
                                <td>{{ $data->package_type }}</td>
                                <td>{{ $data->package_category }}</td>
                                <td>{{ $data->package_amount }}</td>
                                <td><img src="public/package/{{ $data->package_image}}" alt="" style="height: 40px;"></td>
                                <td>{{ $data->package_show_hide }}</td>

                                <td>
                                <form action="package_edit" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input name="submit" class="btn btn-primary" type="submit" value="edit" />
                                </form>
                                </td>
                                <td>
                                <form action="package_delete" method="post">
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
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            initSample();
        </script>
        <script type="text/javascript">
            // CKEDITOR.replace( 'Highlight' );
            CKEDITOR.replace( 'overview' );
            CKEDITOR.add
        </script>
        <script>
     function getMessage() {
         var as = document.getElementById('package_type').value;
            $.ajax({
               type:'POST',
               url:'getmsg',
               data:{ value: as, _token: '{{csrf_token()}}' },
               success:function(data) {
                  $("#msg").html(data);
               }
            });
         }
        </script>
</body>

</html>
