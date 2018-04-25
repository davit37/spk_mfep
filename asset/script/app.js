$(document).on('click', '.deleteAdmin', function () {
    var del_id = $(this).attr("id");
    var triger = $(this).attr('triger');
    

    swal({
        title: 'Anda yakin ?',
        text: "Data ini akan dihapus !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#74b9ff',
        cancelButtonColor: '#ff7675',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
        window.open("action/delete_action.php?id="+del_id+'&triger='+triger,"_self")
        }
    })
    
    
});
 
$(document).on('click', '.editAdmin', function(){
    var id = $(this).attr('id');
    window.open('?page=barang_edit&id='+id, "_self")
})
$(document).on('click', '.editPenjualan', function(){
    var id = $(this).attr('id');
    window.open('?page=penjualan_edit&id='+id, "_self")
})
window.Search = $('.search-box').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.' });

$(document).on('click', '.deletePenjualan', function(){
    var del_id = $(this).attr("id");
    var triger = $(this).attr('triger');
    swal({
        title: 'Anda yakin ?',
        text: "Data ini akan dihapus !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#74b9ff',
        cancelButtonColor: '#ff7675',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
        window.open("action/delete_action.php?id="+del_id+'&triger='+triger,"_self")
        }
    })
    
    
});
