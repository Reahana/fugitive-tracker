<!-- CORE PLUGINS-->
<script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/dd288c4724.js" crossorigin="anonymous"></script>


<script>
    $(document).on('change','#nid',function () {
        var nid = $(this).val();
        $.ajax({
            method: 'GET',
            url: '{{url('/get-name-by-nid')}}',
            data:{id: nid},
            dataType:'json',
            success:function (res) {
                var option = '';
                option += '<option value="-"> -- Select Name -- </option>';
                $.each(res ,function (key, value) {
                    option += '<option value="'+value.name+'"> '+value.name+'</option>';
                });
                $('#name').empty().append(option);
                // $('#code1').empty().append(option);
                // $('#code2').empty().append(option);
                // $('#code3').empty().append(option);
                // $('#code4').empty().append(option);
                // $('#code5').empty().append(option);
            },error:function(e){
                console.log(e);
            }
        })
    })

</script>

<script>
    $(document).on('change','#clause',function () {
        var clause = $(this).val();
        $.ajax({
            method: 'GET',
            url: '{{url('/get-law-by-clause')}}',
            data:{id: clause},
            dataType:'json',
            success:function (res) {
                var option = '';
                option += '<option value="-"> -- Select Law -- </option>';
                $.each(res ,function (key, value) {
                    option += '<option value="'+value.title+'"> '+value.title+'</option>';
                });
                $('#title').empty().append(option);

            },error:function(e){
                console.log(e);
            }
        })
    })

</script>