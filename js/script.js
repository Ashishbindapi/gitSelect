$.get( "http://dev7.pro/databaseSelect/countries.php", function( data ) {
    $.each( data, function( key, value ) {
        $('#contries').append("<option value='"+key+"'>"+value.country_name+"</option>")
      })
  })