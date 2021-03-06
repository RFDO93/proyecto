PGDMP     	                     t            proyecto    9.3.10    9.3.10 5               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       1262    17124    proyecto    DATABASE     z   CREATE DATABASE proyecto WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'es_VE.UTF-8' LC_CTYPE = 'es_VE.UTF-8';
    DROP DATABASE proyecto;
             dorta    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false                       0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    5                       0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    5            �            3079    11829    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false                       0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    181            �            1259    17140    clave    TABLE       CREATE TABLE clave (
    id integer NOT NULL,
    clave character varying(100) NOT NULL,
    orden integer NOT NULL,
    estatus character varying(1),
    fecha_registro date NOT NULL,
    fecha_expiracion date,
    dia_modificacion date NOT NULL,
    cod_usuario integer
);
    DROP TABLE public.clave;
       public         dorta    false    5                       0    0    TABLE clave    COMMENT     -   COMMENT ON TABLE clave IS '- CONTRASEÑA -';
            public       dorta    false    174            �            1259    17138    cont_id_seq    SEQUENCE     m   CREATE SEQUENCE cont_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.cont_id_seq;
       public       dorta    false    5    174                       0    0    cont_id_seq    SEQUENCE OWNED BY     .   ALTER SEQUENCE cont_id_seq OWNED BY clave.id;
            public       dorta    false    173            �            1259    17164    d_rol_recurso    TABLE     �   CREATE TABLE d_rol_recurso (
    id integer NOT NULL,
    cod_rol integer NOT NULL,
    cod_recurso integer NOT NULL,
    estatus character varying(1)
);
 !   DROP TABLE public.d_rol_recurso;
       public         dorta    false    5            �            1259    17162    d_rol_ususario_id_seq    SEQUENCE     w   CREATE SEQUENCE d_rol_ususario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.d_rol_ususario_id_seq;
       public       dorta    false    5    180                        0    0    d_rol_ususario_id_seq    SEQUENCE OWNED BY     @   ALTER SEQUENCE d_rol_ususario_id_seq OWNED BY d_rol_recurso.id;
            public       dorta    false    179            �            1259    17133    persona    TABLE     u  CREATE TABLE persona (
    cedula character varying(12) NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    sexo character varying(1),
    telefono character varying(14),
    celular character varying(14),
    correo character varying(50) NOT NULL,
    estatus character varying(1) NOT NULL,
    fecha_nac date NOT NULL
);
    DROP TABLE public.persona;
       public         dorta    false    5            �            1259    17156    recursos    TABLE     �   CREATE TABLE recursos (
    id integer NOT NULL,
    descripcion character varying(50) NOT NULL,
    ruta character varying(50),
    estatus character varying(1) NOT NULL,
    cod_recur integer
);
    DROP TABLE public.recursos;
       public         dorta    false    5            �            1259    17154    recursos_sistema_id_seq    SEQUENCE     y   CREATE SEQUENCE recursos_sistema_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.recursos_sistema_id_seq;
       public       dorta    false    5    178            !           0    0    recursos_sistema_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE recursos_sistema_id_seq OWNED BY recursos.id;
            public       dorta    false    177            �            1259    17148    rol    TABLE     �   CREATE TABLE rol (
    id integer NOT NULL,
    descripcion character varying(50) NOT NULL,
    estatus character varying(1)
);
    DROP TABLE public.rol;
       public         dorta    false    5            �            1259    17146 
   rol_id_seq    SEQUENCE     l   CREATE SEQUENCE rol_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.rol_id_seq;
       public       dorta    false    176    5            "           0    0 
   rol_id_seq    SEQUENCE OWNED BY     +   ALTER SEQUENCE rol_id_seq OWNED BY rol.id;
            public       dorta    false    175            �            1259    17127    usuario    TABLE     �   CREATE TABLE usuario (
    id integer NOT NULL,
    usuario character varying(15) NOT NULL,
    cod_cedula character varying(12) NOT NULL,
    cod_rol integer NOT NULL,
    estatus character varying(1),
    fecha_ingreso date,
    fecha_egreso date
);
    DROP TABLE public.usuario;
       public         dorta    false    5            �            1259    17125    usuario_id_seq    SEQUENCE     p   CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.usuario_id_seq;
       public       dorta    false    171    5            #           0    0    usuario_id_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE usuario_id_seq OWNED BY usuario.id;
            public       dorta    false    170            �           2604    17143    id    DEFAULT     U   ALTER TABLE ONLY clave ALTER COLUMN id SET DEFAULT nextval('cont_id_seq'::regclass);
 7   ALTER TABLE public.clave ALTER COLUMN id DROP DEFAULT;
       public       dorta    false    174    173    174            �           2604    17167    id    DEFAULT     g   ALTER TABLE ONLY d_rol_recurso ALTER COLUMN id SET DEFAULT nextval('d_rol_ususario_id_seq'::regclass);
 ?   ALTER TABLE public.d_rol_recurso ALTER COLUMN id DROP DEFAULT;
       public       dorta    false    180    179    180            �           2604    17159    id    DEFAULT     d   ALTER TABLE ONLY recursos ALTER COLUMN id SET DEFAULT nextval('recursos_sistema_id_seq'::regclass);
 :   ALTER TABLE public.recursos ALTER COLUMN id DROP DEFAULT;
       public       dorta    false    178    177    178            �           2604    17151    id    DEFAULT     R   ALTER TABLE ONLY rol ALTER COLUMN id SET DEFAULT nextval('rol_id_seq'::regclass);
 5   ALTER TABLE public.rol ALTER COLUMN id DROP DEFAULT;
       public       dorta    false    175    176    176            �           2604    17130    id    DEFAULT     Z   ALTER TABLE ONLY usuario ALTER COLUMN id SET DEFAULT nextval('usuario_id_seq'::regclass);
 9   ALTER TABLE public.usuario ALTER COLUMN id DROP DEFAULT;
       public       dorta    false    171    170    171                      0    17140    clave 
   TABLE DATA               t   COPY clave (id, clave, orden, estatus, fecha_registro, fecha_expiracion, dia_modificacion, cod_usuario) FROM stdin;
    public       dorta    false    174   56       $           0    0    cont_id_seq    SEQUENCE SET     2   SELECT pg_catalog.setval('cont_id_seq', 1, true);
            public       dorta    false    173                      0    17164    d_rol_recurso 
   TABLE DATA               C   COPY d_rol_recurso (id, cod_rol, cod_recurso, estatus) FROM stdin;
    public       dorta    false    180   �6       %           0    0    d_rol_ususario_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('d_rol_ususario_id_seq', 4, true);
            public       dorta    false    179                      0    17133    persona 
   TABLE DATA               i   COPY persona (cedula, nombre, apellido, sexo, telefono, celular, correo, estatus, fecha_nac) FROM stdin;
    public       dorta    false    172   �6                 0    17156    recursos 
   TABLE DATA               F   COPY recursos (id, descripcion, ruta, estatus, cod_recur) FROM stdin;
    public       dorta    false    178   :7       &           0    0    recursos_sistema_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('recursos_sistema_id_seq', 5, true);
            public       dorta    false    177                      0    17148    rol 
   TABLE DATA               0   COPY rol (id, descripcion, estatus) FROM stdin;
    public       dorta    false    176   �7       '           0    0 
   rol_id_seq    SEQUENCE SET     1   SELECT pg_catalog.setval('rol_id_seq', 1, true);
            public       dorta    false    175                      0    17127    usuario 
   TABLE DATA               b   COPY usuario (id, usuario, cod_cedula, cod_rol, estatus, fecha_ingreso, fecha_egreso) FROM stdin;
    public       dorta    false    171   �7       (           0    0    usuario_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('usuario_id_seq', 1, true);
            public       dorta    false    170            �           2606    17137 	   pk_cedula 
   CONSTRAINT     L   ALTER TABLE ONLY persona
    ADD CONSTRAINT pk_cedula PRIMARY KEY (cedula);
 ;   ALTER TABLE ONLY public.persona DROP CONSTRAINT pk_cedula;
       public         dorta    false    172    172            �           2606    17145    pk_cont 
   CONSTRAINT     D   ALTER TABLE ONLY clave
    ADD CONSTRAINT pk_cont PRIMARY KEY (id);
 7   ALTER TABLE ONLY public.clave DROP CONSTRAINT pk_cont;
       public         dorta    false    174    174            �           2606    17169    pk_d_rol_usuario 
   CONSTRAINT     U   ALTER TABLE ONLY d_rol_recurso
    ADD CONSTRAINT pk_d_rol_usuario PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.d_rol_recurso DROP CONSTRAINT pk_d_rol_usuario;
       public         dorta    false    180    180            �           2606    17132    pk_id 
   CONSTRAINT     D   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_id PRIMARY KEY (id);
 7   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_id;
       public         dorta    false    171    171            �           2606    17161 
   pk_recurso 
   CONSTRAINT     J   ALTER TABLE ONLY recursos
    ADD CONSTRAINT pk_recurso PRIMARY KEY (id);
 =   ALTER TABLE ONLY public.recursos DROP CONSTRAINT pk_recurso;
       public         dorta    false    178    178            �           2606    17153    pk_rol 
   CONSTRAINT     A   ALTER TABLE ONLY rol
    ADD CONSTRAINT pk_rol PRIMARY KEY (id);
 4   ALTER TABLE ONLY public.rol DROP CONSTRAINT pk_rol;
       public         dorta    false    176    176            �           2606    17214 	   cod_recur    FK CONSTRAINT     h   ALTER TABLE ONLY recursos
    ADD CONSTRAINT cod_recur FOREIGN KEY (cod_recur) REFERENCES recursos(id);
 <   ALTER TABLE ONLY public.recursos DROP CONSTRAINT cod_recur;
       public       dorta    false    178    178    1943            �           2606    17170 
   fk_persona    FK CONSTRAINT     l   ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_persona FOREIGN KEY (cod_cedula) REFERENCES persona(cedula);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_persona;
       public       dorta    false    1937    172    171            �           2606    17203 
   fk_recurso    FK CONSTRAINT     p   ALTER TABLE ONLY d_rol_recurso
    ADD CONSTRAINT fk_recurso FOREIGN KEY (cod_recurso) REFERENCES recursos(id);
 B   ALTER TABLE ONLY public.d_rol_recurso DROP CONSTRAINT fk_recurso;
       public       dorta    false    180    1943    178            �           2606    17180    fk_rol    FK CONSTRAINT     ]   ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_rol FOREIGN KEY (cod_rol) REFERENCES rol(id);
 8   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_rol;
       public       dorta    false    1941    171    176            �           2606    17198    fk_rol    FK CONSTRAINT     c   ALTER TABLE ONLY d_rol_recurso
    ADD CONSTRAINT fk_rol FOREIGN KEY (cod_rol) REFERENCES rol(id);
 >   ALTER TABLE ONLY public.d_rol_recurso DROP CONSTRAINT fk_rol;
       public       dorta    false    180    176    1941            �           2606    17208 
   fk_usuario    FK CONSTRAINT     g   ALTER TABLE ONLY clave
    ADD CONSTRAINT fk_usuario FOREIGN KEY (cod_usuario) REFERENCES usuario(id);
 :   ALTER TABLE ONLY public.clave DROP CONSTRAINT fk_usuario;
       public       dorta    false    1935    171    174               K   x�EǱ� �:���� �.�4!��#hgw�X���&�z��C`s�l�ڢ�� �M*(I�Di����d�!��         #   x�3�4BG.# i����	�6Ҧ@:F��� X�         g   x�32453076��t�prQps��pU�t�
qT���s����4012�5�4�31�3�D����[;d��&f��%��r:rZZ����q��qqq br         J   x�3����L���LM-N.�,�/���G0�
2
89c���9�B]�9�!|΂��ԤD0ߘ��5��c���� I/            x�3�tt����t����� ��         0   x�3�LL����42453076�4�t�4204�50�50������� �~�     