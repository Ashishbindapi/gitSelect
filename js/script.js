$.get( "http://dev7.pro/gitSelect/api/countries.php", function( data ) {
    $.each( data, function( key, value ) {
        $('#contries').append("<option value='"+key+"'>"+value.country_name+"</option>")
      })
  })
  $.get( "http://dev7.pro/gitSelect/api/states.php", function( data ) {
    $.each( data, function( key, value ) {
        $('#states').append("<option value='"+key+"'>"+value.state_name+"</option>")
      })
  })
  $.get( "http://dev7.pro/gitSelect/api/districs.php", function( data ) {
    $.each( data, function( key, value ) {
        $('#districs').append("<option value='"+key+"'>"+value.district_name+"</option>")
      })
  })