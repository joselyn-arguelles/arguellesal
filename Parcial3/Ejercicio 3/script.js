$('document').ready(function () 
{
    $.post('getbancos.php', function (ret) {
                 $("#tablaJSGRID").jsGrid({
                 width: "80%",
                 height: "300px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret,
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [{ name: "id_banco",type: "text",title: "ID",         width: 10,validate: "required"},
                         { name: "razon_social",    type: "text",title: "Razon Social",     width: 100},
                         { name: "rfc", type: "text",title: "RFC", width: 55},
                         { name: "colonia", type: "text",title: "Colonia", width: 50},
                         { name: "calle",     type: "text",title: "Calle",      width: 50},
                         { name: "numero_domicilio",     type: "text",title: "Num Domicilio",  width: 30},
                         { name: "telefono",     type: "text",title: "Telefono",      width: 40},
                         { type: "control"}],
                });
            }
    ,'json');
});