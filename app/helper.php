<?php
function formatdate($format,$date){
    return date($format,strtotime($date));
}