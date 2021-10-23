delimiter |

CREATE TRIGGER update_filmes AFTER UPDATE ON filmes
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'filmes', operacao = 'U', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER delete_filmes BEFORE DELETE ON filmes
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'filmes', operacao = 'D', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER update_livros AFTER UPDATE ON livros
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'livros', operacao = 'U', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER delete_livros BEFORE DELETE ON livros
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'livros', operacao = 'D', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER update_series AFTER UPDATE ON series
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'series', operacao = 'U', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER delete_series BEFORE DELETE ON series
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'series', operacao = 'D', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER update_bio AFTER UPDATE ON bio
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'bio', operacao = 'U', id_operado = old.id, created_at = NOW();
  END;
|

CREATE TRIGGER delete_bio BEFORE DELETE ON bio
  FOR EACH ROW
  BEGIN
    INSERT INTO trigger_logs SET tabela = 'bio', operacao = 'D', id_operado = old.id, created_at = NOW();
  END;
|

delimiter ;