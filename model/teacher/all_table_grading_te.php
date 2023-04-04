<?php
    $sql_hw_header="SELECT hm.hw_id,hm.hw_name,hm.subject_id,hm.classroom_id,
    subj.subject_codename,subj.subject_name
    FROM `homework` hm
    LEFT JOIN `subject` subj ON subj.subject_id=hm.subject_id
    WHERE subject_codename='$subject_codename' && classroom_id='$classroom_id'
    ORDER BY `hm`.`classroom_id` ASC
    "; 
    $hw_header=mysqli_query($conn,$sql_hw_header);
    $sql_hw_body="SELECT hm.hw_id,hm.hw_name,hm.subject_id,hm.classroom_id,
    subj.subject_codename,subj.subject_name
    FROM `homework` hm
    LEFT JOIN `subject` subj ON subj.subject_id=hm.subject_id
    WHERE subject_codename='$subject_codename' && classroom_id='$classroom_id'
    ORDER BY `hm`.`classroom_id` ASC
    "; 
     $hw_tbody=mysqli_query($conn,$sql_hw_body);
     $hw_id_all=array();
     while ($hw_body_list = mysqli_fetch_array($hw_tbody)){
        array_push($hw_id_all,$hw_body_list['hw_id']);
     }
     
     //print_r($hw_body_list);
     //foreach($hw_body_list)

    $sql_std_table_list="SELECT * FROM `student` WHERE classroom_id='$classroom_id' ORDER BY `student`.`std_id` ASC ";
    $std_table_list=mysqli_query($conn,$sql_std_table_list);

?>
    <table class="table table-sm">
        <thead>
        
            <tr>
                <th>ลำดับ</th>
                <th>รหัสนักเรียน</th>
                <th>ชื่อ-นามสกุล</th>
                <th class="text-center" colspan="3" >การทำงาน</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($std_table_list)>=1){
            $i = 1;
            while ($result_std_list = mysqli_fetch_array($std_table_list)) {
            ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $result_std_list['std_id']; ?></td>
                    <td><?php echo $result_std_list['name']." ".$result_std_list['surname']; ?></td>
        
                    <td>
                        <a href="
../../view/teacher/index_logged-tech_std_all_hw.php?std_id=<?php echo $result_std_list['std_id']?>" class="btn btn-success col-md-12">ตรวจสอบการบ้าน</a>
                    </td>
                    

                </tr>
            <?php
                $i++;
            }
        }
        else {?> <tr> <td class="text-center" colspan="7">ไม่มีการบ้าน</td></tr> <?php }
            ?>
        </tbody>
    </table>
<?php
function check_hw_list($condb,$hw_id,$std_id){
    $sql_check_hwstd_list = "SELECT * 
        FROM `hwgrading`
        WHERE hw_id='$hw_id' && std_id='$std_id'
    ";
    $resault_table = mysqli_query($condb, $sql_check_hwstd_list);
    $check_hw = mysqli_fetch_array($resault_table);
    if(isset($check_hw)){
        $status="success";
        $score=$check_hw['score'];
        
    }else{
        $status="unsuccess";
        $score=null;
        
    }
    return array($status,$score);
    }
?>
