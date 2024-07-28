
$(document).ready(function() {
   $("#produit-table").DataTable(
    {
        "paging": true,
        "info": true,
        "searching": true,
        // "ordering": true,
        "perpage": 10,
        "responsive": true,
        "lengthChange": false,
        "language": {
            "search": "Rechercher :",
            "lengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
            "info": "&Eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "infoEmpty": "&Eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            "infoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "infoPostFix": "",
            "loadingRecords": "Chargement en cours...",
            "zeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "emptyTable": "Aucune donn&eacute;e disponible dans le tableau",
           
        }
    }

    
)
$("#categorie-table").DataTable(
    {
        "paging": true,
        "info": true,
        "searching": true,
        // "ordering": true,
        "perpage": 10,
        "responsive": true,
        "lengthChange": false,
        "language": {
            "search": "Rechercher :",
            "lengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
            "info": "&Eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "infoEmpty": "&Eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            "infoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "infoPostFix": "",
            "loadingRecords": "Chargement en cours...",
            "zeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "emptyTable": "Aucune donn&eacute;e disponible dans le tableau",
           
        }
    })
    $("#garantie-table").DataTable(
        {
            "paging": true,
            "info": true,
            "searching": true,
            // "ordering": true,
            "perpage": 10,
            "responsive": true,
            "lengthChange": false,
            "language": {
                "search": "Rechercher :",
                "lengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                "info": "&Eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "infoEmpty": "&Eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                "infoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "infoPostFix": "",
                "loadingRecords": "Chargement en cours...",
                "zeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "emptyTable": "Aucune donn&eacute;e disponible dans le tableau",
               
            }
        })
        $("#vente-table").DataTable(
            {
                "paging": true,
                "info": true,
                "searching": true,
                // "ordering": true,
                "perpage": 10,
                "responsive": true,
                "lengthChange": false,
                "language": {
                    "search": "Rechercher :",
                    "lengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                    "info": "&Eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    "infoEmpty": "&Eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    "infoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    "infoPostFix": "",
                    "loadingRecords": "Chargement en cours...",
                    "zeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    "emptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                   
                }
            })
            $("#reparation-table").DataTable(
                {
                    "paging": true,
                    "info": true,
                    "searching": true,
                    // "ordering": true,
                    "perpage": 10,
                    "responsive": true,
                    "lengthChange": false,
                    "language": {
                        "search": "Rechercher :",
                        "lengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                        "info": "&Eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                        "infoEmpty": "&Eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                        "infoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                        "infoPostFix": "",
                        "loadingRecords": "Chargement en cours...",
                        "zeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                        "emptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                       
                    }
                })
})

