$(document)
        .ready(function () {
            var simulation = {
                amount    : $("#credit-amount"),
                terms     : $("#credit-terms"),
                monthly   : $("#cicilan-bulanan"),
                total     : $("#total-cicilan"),
                formatCurr: function (v) {
                    return v.toLocaleString(undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                      });
                },
                calculate : function () {
                    s = simulation;
                    amount = parseInt(s.amount.val().replace(/,/g, "")) || 0;
                    terms  = parseInt(s.terms.val().replace(/,/g, ""))  || 1;
                    
                    s.amount.val(amount.toLocaleString() || "");
                    

                    totalMin   = amount + (amount * 0.12);
                    totalMax   = amount + (amount * 0.24);
                    monthlyMin = totalMin / terms;
                    monthlyMax = totalMax / terms;

                    s.monthly.text("Rp." + s.formatCurr(monthlyMin) + " - Rp." + s.formatCurr(monthlyMax));
                    s.total.text  ("Rp." + s.formatCurr(totalMin)   + " - Rp." + s.formatCurr(totalMax));
                }
            };

            simulation.amount.on("keyup", simulation.calculate);
            simulation.terms.on("change", simulation.calculate);

        });
