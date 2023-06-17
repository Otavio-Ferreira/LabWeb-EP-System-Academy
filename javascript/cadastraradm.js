const senha = document.getElementById('senha');
        const eye = document.getElementById('eye');

        eye.onclick = () =>
        {
            if (senha.type === 'password')
            {
                senha.type = 'text'
            }
            else{
                senha.type = 'password'
            }
        }

        function opcoesPagamentos(){
            var plano = document.getElementById('plano').value;
            var img = document.getElementById('qrcode');

            
            var data = new Date();
            var ano = data.getUTCFullYear();
            var mes = data.getMonth()+1;
            var dia = data.getUTCDate();
            document.getElementById('dataPagamento').value = `${ano}/${mes}/${dia}`;
            var datafim = document.getElementById('dataFim')

            if(plano == 'Plano-Mensal'){
                img.src = '../img/qrcode-pix50.png'
                if(mes == 12){
                    datafim.value = `${ano+1}/${mes-11}/${dia}`
                }
                else{
                    datafim.value = `${ano}/${mes + 1}/${dia}`;
                }
            }

            else if(plano == 'Plano-Trimestral'){
                img.src = '../img/qrcode-pix120.png';
                if(mes == 10 || mes == 11 || mes == 12){
                    datafim.value = `${ano+1}/${mes - 9}/${dia}`;
                }
                else{
                    datafim.value = `${ano}/${mes + 3}/${dia}`;
                }
                
            }
            else if(plano == 'Plano-Anual'){
                img.src = '../img/qrcode-pix360.png'
                datafim.value = `${ano+1}/${mes}/${dia}`;
            }
        }