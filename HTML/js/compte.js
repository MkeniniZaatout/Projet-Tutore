validateMdp2 = function(e)
  {

              var mdp1 = document.getElementById('password');
              var mdp2 = document.getElementById('confirm_password');
              //var re = /^[a-z0-9A-Z]{6}/;
              if (mdp1.value==mdp2.value)
              {

                  document.getElementById('password').setCustomValidity('ok');

              }
              else
              {
                  document.getElementById('confirm_password').setCustomValidity('Les mots de passe ne sont pas identique');
                  return true;
              }
        }
