$("#ajaxSearch").submit(function (e) {
    e.preventDefault()
    var search = $(this).find("input[name='search']").val()
    console.log(search)
    $.ajax({
        url: "/Projet_Web/MySite/gameAjax?s=" + search ,
        data: {},

        success: function (data) {
            var content = ""
            console.log(data);
              if (data) {

                                for (let i = 0; i < data.length; i++) {
                                    content += '<article>'
                                    content += '<header>'
                                    content += '<h1 className="titleGame">' + data[i]['GAME_NAME'] + '</h1>'
                                    content += '</header>'
                                    content += '<a href="viewDetails/' + data[i]['GAME_ID'] + '"><img src=' + data[i]['GAME_COVER_URL'] + ' width="150" height="200" alt=""></a>'
                                    content += '</article>'
                                }
                            }
                            console.log(content);
     $("#gameSearch").html(content)
        }

    });
})