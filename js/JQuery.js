$('#exp').on('submit', function ()
{
    let tour = $("#inp1").val();
    let date = new Date($("#inp2").val());
    let month = date.getMonth();
    let kol = $("#inp3").val();
    kol = Number(kol)
    let email = $("#inp4").val();
    let stoim = 0;
    if (tour == 'Крым')
    {
        if ((month == 5)||(month == 6)||(month == 7)||(month == 8))
            {stoim = kol*500;}
        else {stoim = kol*300;}
    }
    if (tour == 'Кавказ')
    {
        if ((month == 12)||(month == 1)||(month == 2)||(month == 5)||(month == 6)||(month 
            == 7)||(month == 58))
            {stoim = kol*300;}
        else {stoim = kol*250;}
    }
    if (tour == 'Алтай')
    {
        {stoim = kol*1000;}
    }
    alert ('Примерная стоимость вашего тура на ${kol} человек составит ${stoim} y.e Мы свяжемся в ВАМИ!!');
}
);