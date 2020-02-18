#$test = [System.IO.DirectoryInfo]::new(".");
#foreach ($item in $test.GetFiles("*.png")){
#    Write-Output $item.Name;
#}

# $test2 = Get-ChildItem -Path "*.png";

# foreach($item in $test2){
#     Write-Output "<img class=`"`" src=`"/sponsors/Logoer/$($item.Name)`" alt=`"$($item.Name -replace "([A-Z\-]+).png",'$1')`" />";
#     #Write-Output $item.Name
# }

Get-ChildItem -Path "*.png" | ForEach-Object { 
    Write-Output "<img class=`"`" src=`"/sponsors/Logoer/$($_.Name)`" alt=`"$($_.Name -replace "([A-Z\-]+).png",'$1')`" />";
}