$(document).ready(function(){
    window.$('#candtable').dataTable({
        select: {
            style: 'multi',
            selector: 'td:first-child'
        }
    });
});

$(document).ready(function(){
    window.$('#onHoldtable').dataTable({
        select: {
            style: 'multi',
            selector: 'td:first-child'
        }
    });
});

$(document).ready(function(){
    window.$('#pendingtable').dataTable({
        select: {
            style: 'multi',
            selector: 'td:first-child'
        }
    });
});

$(document).ready(function(){
    window.$('#deniedtable').dataTable({
        select: {
            style: 'multi',
            selector: 'td:first-child'
        }
    });
});
