(function($){
    $(document).ready(function(){

        //Show student add modal
        $("a#student_show").click(function(){
            $("#popModal").modal('show');

            return false;
        });

        //Single student modal show
        $(document).on('click','a#stuView',function(){
            $("#sigStuMol").modal('show');

            let sinStuId = $(this).attr('student_data');

            $.ajax({
                url : "inc/ajax/single_student.php",
                data : { id : sinStuId },
                method : "POST",
                success : function(data){

                    let single_data = JSON.parse(data);

                    $("#sig_stu_head").html(single_data.name);
                    $("#sigStuMol img").attr('src' , 'media/images/students/'+single_data.photo);
                    $("td#sigStuName").html(single_data.name);
                    $("td#sigStuEmail").html(single_data.email);
                    $("td#sigStuCell").html(single_data.cell);
                    $("td#sigStuLoct").html(single_data.location);
                    

                }
            });

            return false;
        });

        // Form submit
        $("form#student_add").submit(function(e){
            e.preventDefault();
            
            let name = $("input[name='name']").val();
            let email = $("input[name='email']").val();
            let cell = $("input[name='mobile']").val();
            let location = $("select[name='loct']").val();
            let photo = $("input[name='photo']").val();

            if( name=="" || email=="" || cell=="" || location=="" ){
                $("#altNoti").html("<p class='alert alert-warning alert-dismissible fade show'>Please fill up the all field<button type='button' class='btn-close' data-bs-dismiss='alert'></button></p>");
            }

            $.ajax({
                url : 'inc/ajax/student_add.php',
                data : new FormData(this),
                method : "POST",
                contentType : false,
                processData : false,
                success : function(data){
                    
                    $("form#student_add")[0].reset();
                    $("#popModal").modal('hide');
                    $(".confMess").html(data);
                    showAllData();
                }
            });
        });


        // Show all student data
        function showAllData(){
            $.ajax({
                url : 'inc/ajax/show_all.php',
                success : function(data){
                    $("tbody#all_student_data").html(data);
                }
            });
        }

        showAllData();

        // Delete student from table
        $(document).on("click","#delete_student",function(){
            let stu_attr = $(this).attr('student_data');
            
            let conf_sms = confirm("Are you sure to delete ?");

            if( conf_sms == true ){
                $.ajax({
                    url : "inc/ajax/delete_student.php",
                    data : { id : stu_attr },
                    method : "POST",
                    success : function(){
                        showAllData();
                        $(".confMess").html("<p class='alert alert-success alert-dismissible fade show'>Data Deleted Successfull<button type='button' class='btn-close' data-bs-dismiss='alert'></button></p>");

                    }
                });
            }else {
                return false;
            }

            return false;
        });

        // Edit student data
        $(document).on('click','a#stu_edit', function(){

            let stu_id = $(this).attr('student_data');

            $.ajax({
                url : 'inc/ajax/update_student.php',
                data : { id : stu_id },
                method : "POST",
                success : function(data){
                    $stu_dtObj = JSON.parse(data);

                    $("#stu_upd_form input[name='name']").val($stu_dtObj.name);
                    $("#stu_upd_form input[name='stu_up_id']").val($stu_dtObj.sl);
                    $("#stu_upd_form input[name='email']").val($stu_dtObj.email);
                    $("#stu_upd_form input[name='mobile']").val($stu_dtObj.cell);
                    $("#stu_upd_form select[name='loct']").val($stu_dtObj.location);
                    $("#stu_upd_form input[name='old_photo']").val($stu_dtObj.photo);
                    $("#up_img img").attr('src','media/images/students/'+$stu_dtObj.photo);

                }
            });

            $("#update_stu_modal").modal('show');
            return false;
        });

        // Update student data
        $(document).on('submit','#stu_upd_form',function(event){
            event.preventDefault();

            $.ajax({
                url : "inc/ajax/edit_student.php",
                data : new FormData(this),
                method : "POST",
                contentType : false,
                processData : false,
                success : function(data){
                    
                    $("#update_stu_modal").modal('hide');
                    showAllData();
                    $(".confMess").html("<p class='alert alert-success alert-dismissible fade show'>Data Updated Successfull<button type='button' class='btn-close' data-bs-dismiss='alert'></button></p>");
                }

            });

            return false;
        });



    });
})(jQuery)