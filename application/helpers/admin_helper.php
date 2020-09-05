<?php


function getTypes()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('property_type')->get()->result();
    echo '<option value="-1">Property Type*</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->type_id . '" >  ' . $dd->type_name . '</option><br />';
    }
}

function getLocation()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('property_location')->get()->result();
    echo '<option value="-1">Location*</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->location_id . '" >  ' . $dd->location_name . '</option><br />';
    }
}

function getPropertyOwner()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('tbl_seller')->get()->result();
    echo '<option value="-1">Property Owner*</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->seller_id . '" >  ' . $dd->seller_name . '</option><br />';
    }
}

function PropertyStatus($value){
    
    switch ($value) {
        case 1:
            echo "<p style='color:green;font-weight:bold;'>"."ACTIVE"."</p>";
            break;
        case 0:
            echo "<p style='color:#ff0000;font-weight:bold;'>"."PENDING"."</p>";
            break;
        default:
            echo "";
    }
}

function drawing($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function dining($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function elevator($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function gas($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function parking($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function lobby($value){

    switch ($value) {
        case 1:
            echo "Yes";
            break;
        case 0:
            echo "No";
            break;
        default:
            echo "";
    }

}

function view($value){

    switch ($value) {
        case 1:
            echo "South";
            break;
        case 2:
            echo "North";
            break;
        case 3:
            echo "East";
            break;
        case 4:
            echo "West";
            break;
        default:
            echo "";
    }

}

function security($value){

    switch ($value) {
        case 1:
            echo "Available";
            break;
        case 0:
            echo "Not Available";
            break;
        default:
            echo "";
    }

}

function maintenance_staff($value){

    switch ($value) {
        case 1:
            echo "Available";
            break;
        case 0:
            echo "Not Available";
            break;
        default:
            echo "";
    }

}

function getAllcategory(){
	
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('category')->get()->result();

    foreach ($data as $d) {
        echo '<option value="' . $d->cat_id . '" />  ' . $d->category . '<br />';
    }
}

function getAllSubcatByCatId($cat_id){
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('subcategory')->where('subcat_catid', $cat_id)->get()->result();
    $out = '';
    foreach ($data as $dd) {
        $out .= '<option value="' . $dd->subcat_id . '" >  ' . $dd->subcategory . '</option><br />';
    }
    echo empty($out) ? 'Not Set' : $out;
}

function SelectedCategory($val){
    
    switch ($val) {
        case 1:
            echo "Main Page";
            break;
        case 2:
            echo "Right Side";
            break;
        default:
            echo "";
    }
}

function SelectedPosition($val){
    
    switch ($val) {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        case 3:
            echo "Three";
            break;
        case 4:
            echo "Four";
            break;
        default:
            echo "";
    }
}

function SelectedUserType($val){
    
    switch ($val) {
        case 1:
            echo "Admin";
            break;
        case 2:
            echo "Seller";
            break;
        case 3:
            echo "Buyer";
            break;
        default:
            echo "";
    }
}

function SelectedUserStatus($val){
    
    switch ($val) {
        case 1:
            echo "Active";
            break;
        case 2:
            echo "Inactive";
            break;
        default:
            echo "";
    }
}