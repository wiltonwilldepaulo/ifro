CREATE EXTENSION IF NOT EXISTS "uuid-ossp";

CREATE EXTENSION IF NOT EXISTS "pg_stat_statements";

DO $$
BEGIN
  IF NOT EXISTS (SELECT FROM pg_roles WHERE rolname = 'ifro') THEN
    CREATE ROLE senac LOGIN PASSWORD 'ifro';
  END IF;
END
$$;

CREATE DATABASE development_db
  OWNER senac;

CREATE DATABASE testing_db
  OWNER senac;

CREATE DATABASE production_db
  OWNER senac;