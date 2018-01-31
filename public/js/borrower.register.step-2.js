$(document)
    .ready(function () {
        var simulation = {
            amount    : $("#credit-amount"),
            terms     : $("#credit-terms"),
            info      : {
                amount  : $('#info-credit-amount'),
                nett     : $('#info-credit-nett'),
                terms   : $('#info-credit-terms'),
                monthly : $("#info-monthly-credit"),
            },
            formatCurr: function (v) {
                return v.toLocaleString(undefined, {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                  });
            },
            calculate : function () {
                s       = simulation;
                amount  = parseInt(s.amount.val().replace(/,/g, "")) || 0;
                terms   = parseInt(s.terms.val().replace(/,/g, ""))  || 1;
                
                s.amount.val(amount.toLocaleString());
                
                nett       = amount - (amount * 0.05);
                totalMin   = amount + (amount * 0.090);
                totalMax   = amount + (amount * 0.022);
                monthlyMin = totalMin / terms;
                monthlyMax = totalMax / terms;
                
                
                s.info.terms.text   (terms + " Bulan");
                s.info.amount.text  ("Rp. "+ s.formatCurr(amount));
                s.info.nett.text    ("Rp. "+ s.formatCurr(nett));
                s.info.monthly.text ("Rp." + s.formatCurr(monthlyMin) + " - Rp." + s.formatCurr(monthlyMax));
            }
        };

        console.log(5);
        simulation.amount.on("keyup", simulation.calculate);
        simulation.terms.on("change", simulation.calculate);

    });
