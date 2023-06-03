@include('mp_admin.header')
            <div class="container-fluid">
                <h2>Category Master Form</h2>
                
                <div class="row">
                    <div class="col-md-12">
                    @foreach($package_edit as $key => $data)
                    <form action="package_update" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="package_type">Type</label>
                                        <select onChange="getMessage()" name="package_type" class="form-control" id="package_type">
                                        <option value="0">Select anyOne</option>
                                          <option value="Package" @if($data->package_type == 'Package') <?php echo "selected"; ?> @endif  >Package</option>
                                          <option value="Wildlife & Nature" @if($data->package_type == 'Wildlife & Nature') <?php echo "selected"; ?> @endif>Wildlife & Nature</option>
                                          <option value="Haritage & Pilgrimage" @if($data->package_type == 'Haritage & Pilgrimage') <?php echo "selected"; ?> @endif>Heritage & Pilgrimage</option>
                                          <option value="Jal Mahoutsav" @if($data->package_type == 'Jal Mahoutsav') <?php echo "selected"; ?> @endif>Jal Mahoutsav</option>
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
                                        <input name="PackageTitle" type="text" value="{{ $data->package_title }}" class="form-control" id="PackageTitle" placeholder="Enter Title 2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PackageAmount">Package Amount</label>
                                        <input name="PackageAmount" type="text" value="{{ $data->package_amount }}" class="form-control" id="PackageAmount" placeholder="Enter Title 2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PackageImage">Package Image</label>
                                        <input name="PackageImage" type="file" value="{{ $data->package_image }}" class="form-control" id="PackageImage" placeholder="Enter Title 2" >
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
                                        <input name="package_show_hide" type="checkbox" class="form-check-input" id="package_show_hide" @if($data->package_show_hide) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="package_show_hide">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Highlight">Highlight</label>
                                        <textarea name="Highlight" value="{{ $data->package_highlight }}" class="form-control" id="Highlight" rows="3">{{ $data->package_highlight }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="overview">Example textarea</label>
                                        <textarea name="overview" id="overview" class="form-control" rows="3" required>{{ $data->example_textarea }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="SubCategory">Sub Category</label>
                                        <select name="SubCategory" class="form-control" id="SubCategory">
                                          <option value="">Select Sub Category</option>
                                          <option value="family&group" @if($data->sub_category == 'family&group') <?php echo "selected"; ?> @endif >Family & Group</option>
                                          <option value="Friends" @if($data->sub_category == 'Friends') <?php echo "selected"; ?> @endif >Friends</option>
                                          <option value="honeymoon" @if($data->sub_category == 'honeymoon') <?php echo "selected"; ?> @endif >Honeymoon</option>
                                          <option value="adventure" @if($data->sub_category == 'adventure') <?php echo "selected"; ?> @endif >Adventure</option>
                                          <option value="heritage&pilgrimage" @if($data->sub_category == 'heritage&pilgrimage') <?php echo "selected"; ?> @endif >Heritage & Pilgrimage</option>                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="margin-bottom: .5rem;">Flights</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Flights" value="flights" type="checkbox" class="form-check-input" id="Flights" @if($data->flights ) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Flights">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Hotels</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Hotels" value="hotels" type="checkbox" class="form-check-input" id="Hotels" @if($data->hotels ) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Hotels">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Sight-seen</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Sight_seen" value="sight seen" type="checkbox" class="form-check-input" id="Sight_seen" @if($data->sight_seen ) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Sight_seen">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Transfers</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Transfers" value="transfers" type="checkbox" class="form-check-input" id="Transfers" @if($data->transfers ) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Transfers">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Meals</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Meals" value="meals" type="checkbox" class="form-check-input" id="Meals" @if($data->meals ) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Meals">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Bike Tour</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="BikeTour" value="bike tour" type="checkbox" class="form-check-input" id="BikeTour" @if($data->bike_tour) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="BikeTour">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Cruise Tour</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="CruiseTour" value="cruise tour" type="checkbox" class="form-check-input" id="CruiseTour" @if($data->cruise_tour) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="CruiseTour">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Water Spots</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="WaterSpots" value="water spots" type="checkbox" class="form-check-input" id="WaterSpots" @if($data->water_spots) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="WaterSpots">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Adventure Sports</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="AdventureSports" value="adventure sport" type="checkbox" class="form-check-input" id="AdventureSports" @if($data->adventure_sports) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="AdventureSports">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Camp Stays</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="CampStays" value="camp stays" type="checkbox" class="form-check-input" id="CampStays" @if($data->camp_stays) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="CampStays">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style=" margin-bottom: .5rem;">Trekking</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Trekking" value="trekking" type="checkbox" class="form-check-input" id="Trekking" @if($data->trekking) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Trekking">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Om</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Om" value="om" type="checkbox" class="form-check-input" id="Om" @if($data->om) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Om">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Gurudwara</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Gurudwara" value="gurudwara" type="checkbox" class="form-check-input" id="Gurudwara" @if($data->gurudwara) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Gurudwara">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span style="    margin-bottom: .5rem;">Church</span>
                                    <div class="form-group form-check mycheck">
                                        <input name="Church" value="church" type="checkbox" class="form-check-input" id="Church" @if($data->church) <?php echo "checked"; ?> @endif >
                                        <label class="form-check-label" for="Church">Check me out</label>
                                    </div>
                                </div>                            



                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
         getMessage();
        </script>
</body>

</html>