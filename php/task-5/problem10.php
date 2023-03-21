<?php
function change_permissions($filename) {
    
    if (file_exists($filename) && is_file($filename)) {
       
        if (pathinfo($filename, PATHINFO_EXTENSION) == "txt") {
            
            if (chmod($filename, 0600)) {
                
                return "Permissions Changed\n";
            }
        } else {
           
            return "File Extension Is Not Txt\n";
        }
    } else {
        
        return "This Is Directory And Only Files Allowed\n";
    }
  }
  echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
  echo change_permissions("Work.docx"); // File Extension Is Not Txt
  echo change_permissions("Result.txt"); // Permissions Changed