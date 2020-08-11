							<?php 
									session_start();		//inicia sessão
								
								
									$_SESSION = array();	//apaga todos os dados da sessão
									
									session_unset();
									
									
									// Deleta o cookie da sessão
									// Isso destruirá a sessão, não apenas seus dados
									if (ini_get("session.use_cookies")) {
										$params = session_get_cookie_params();
										setcookie(session_name(), '', time() - 42000,
											$params["path"], $params["domain"],
											$params["secure"], $params["httponly"]
										);
									}
									
								
									session_destroy();		//destrói a sessão
						
							?>
