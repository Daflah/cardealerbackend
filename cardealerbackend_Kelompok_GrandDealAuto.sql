PGDMP  /    &                |            cardealerbackend    16.3    16.3 X    $           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            %           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            &           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            '           1262    16398    cardealerbackend    DATABASE     �   CREATE DATABASE cardealerbackend WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Indonesian_Indonesia.1252';
     DROP DATABASE cardealerbackend;
                postgres    false            �            1259    16601    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    16600    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            (           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    16632    galeris    TABLE     �   CREATE TABLE public.galeris (
    id bigint NOT NULL,
    gambar character varying(100) NOT NULL,
    judul character varying(100) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.galeris;
       public         heap    postgres    false            �            1259    16631    galeris_id_seq    SEQUENCE     w   CREATE SEQUENCE public.galeris_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.galeris_id_seq;
       public          postgres    false    227            )           0    0    galeris_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.galeris_id_seq OWNED BY public.galeris.id;
          public          postgres    false    226            �            1259    16639    headers    TABLE     t  CREATE TABLE public.headers (
    id bigint NOT NULL,
    gambar character varying(100) NOT NULL,
    slogan character varying(100) NOT NULL,
    judulmobil character varying(100) NOT NULL,
    model character varying(100) NOT NULL,
    harga character varying(100) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.headers;
       public         heap    postgres    false            �            1259    16638    headers_id_seq    SEQUENCE     w   CREATE SEQUENCE public.headers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.headers_id_seq;
       public          postgres    false    229            *           0    0    headers_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.headers_id_seq OWNED BY public.headers.id;
          public          postgres    false    228            �            1259    16648    jualans    TABLE     �  CREATE TABLE public.jualans (
    id bigint NOT NULL,
    gambar character varying(255) NOT NULL,
    merk character varying(255) NOT NULL,
    namamobil character varying(255) NOT NULL,
    type character varying(255) NOT NULL,
    transmission character varying(255) NOT NULL,
    bensin character varying(255) NOT NULL,
    harga numeric(15,2) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.jualans;
       public         heap    postgres    false            �            1259    16647    jualans_id_seq    SEQUENCE     w   CREATE SEQUENCE public.jualans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.jualans_id_seq;
       public          postgres    false    231            +           0    0    jualans_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.jualans_id_seq OWNED BY public.jualans.id;
          public          postgres    false    230            �            1259    16657 	   komentars    TABLE     }  CREATE TABLE public.komentars (
    id bigint NOT NULL,
    gambarmobil character varying(255) NOT NULL,
    gambarprofile character varying(255) NOT NULL,
    nama character varying(255) NOT NULL,
    job character varying(255) NOT NULL,
    komentar character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.komentars;
       public         heap    postgres    false            �            1259    16656    komentars_id_seq    SEQUENCE     y   CREATE SEQUENCE public.komentars_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.komentars_id_seq;
       public          postgres    false    233            ,           0    0    komentars_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.komentars_id_seq OWNED BY public.komentars.id;
          public          postgres    false    232            �            1259    16400 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16399    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            -           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    16593    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    16625    pegawais    TABLE     \  CREATE TABLE public.pegawais (
    id bigint NOT NULL,
    gambar character varying(100) NOT NULL,
    nama character varying(100) NOT NULL,
    alamat character varying(100) NOT NULL,
    nim character varying(100) NOT NULL,
    tgllhr date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pegawais;
       public         heap    postgres    false            �            1259    16624    pegawais_id_seq    SEQUENCE     x   CREATE SEQUENCE public.pegawais_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.pegawais_id_seq;
       public          postgres    false    225            .           0    0    pegawais_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.pegawais_id_seq OWNED BY public.pegawais.id;
          public          postgres    false    224            �            1259    16676 
   pembelians    TABLE     �  CREATE TABLE public.pembelians (
    id bigint NOT NULL,
    email_address character varying(255) NOT NULL,
    card_number character varying(255) NOT NULL,
    card_holder_name character varying(255) NOT NULL,
    expiration_date character varying(255) NOT NULL,
    cvv character varying(255) NOT NULL,
    country character varying(255) NOT NULL,
    zip_code character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pembelians;
       public         heap    postgres    false            �            1259    16675    pembelians_id_seq    SEQUENCE     z   CREATE SEQUENCE public.pembelians_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.pembelians_id_seq;
       public          postgres    false    237            /           0    0    pembelians_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.pembelians_id_seq OWNED BY public.pembelians.id;
          public          postgres    false    236            �            1259    16613    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16612    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            0           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    16667    unggulan_mobils    TABLE     �   CREATE TABLE public.unggulan_mobils (
    id bigint NOT NULL,
    gambarmobil character varying(255) NOT NULL,
    nama character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.unggulan_mobils;
       public         heap    postgres    false            �            1259    16666    unggulan_mobils_id_seq    SEQUENCE        CREATE SEQUENCE public.unggulan_mobils_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.unggulan_mobils_id_seq;
       public          postgres    false    235            1           0    0    unggulan_mobils_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.unggulan_mobils_id_seq OWNED BY public.unggulan_mobils.id;
          public          postgres    false    234            �            1259    16582    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    usertype character varying(255) DEFAULT 'user'::character varying NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16581    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            2           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            S           2604    16604    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            W           2604    16635 
   galeris id    DEFAULT     h   ALTER TABLE ONLY public.galeris ALTER COLUMN id SET DEFAULT nextval('public.galeris_id_seq'::regclass);
 9   ALTER TABLE public.galeris ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            X           2604    16642 
   headers id    DEFAULT     h   ALTER TABLE ONLY public.headers ALTER COLUMN id SET DEFAULT nextval('public.headers_id_seq'::regclass);
 9   ALTER TABLE public.headers ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228    229            Y           2604    16651 
   jualans id    DEFAULT     h   ALTER TABLE ONLY public.jualans ALTER COLUMN id SET DEFAULT nextval('public.jualans_id_seq'::regclass);
 9   ALTER TABLE public.jualans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231            Z           2604    16660    komentars id    DEFAULT     l   ALTER TABLE ONLY public.komentars ALTER COLUMN id SET DEFAULT nextval('public.komentars_id_seq'::regclass);
 ;   ALTER TABLE public.komentars ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232    233            P           2604    16403    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            V           2604    16628    pegawais id    DEFAULT     j   ALTER TABLE ONLY public.pegawais ALTER COLUMN id SET DEFAULT nextval('public.pegawais_id_seq'::regclass);
 :   ALTER TABLE public.pegawais ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            \           2604    16679    pembelians id    DEFAULT     n   ALTER TABLE ONLY public.pembelians ALTER COLUMN id SET DEFAULT nextval('public.pembelians_id_seq'::regclass);
 <   ALTER TABLE public.pembelians ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236    237            U           2604    16616    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            [           2604    16670    unggulan_mobils id    DEFAULT     x   ALTER TABLE ONLY public.unggulan_mobils ALTER COLUMN id SET DEFAULT nextval('public.unggulan_mobils_id_seq'::regclass);
 A   ALTER TABLE public.unggulan_mobils ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    235    235            Q           2604    16585    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218                      0    16601    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   �i                 0    16632    galeris 
   TABLE DATA           L   COPY public.galeris (id, gambar, judul, created_at, updated_at) FROM stdin;
    public          postgres    false    227   j                 0    16639    headers 
   TABLE DATA           g   COPY public.headers (id, gambar, slogan, judulmobil, model, harga, created_at, updated_at) FROM stdin;
    public          postgres    false    229   �k                 0    16648    jualans 
   TABLE DATA           y   COPY public.jualans (id, gambar, merk, namamobil, type, transmission, bensin, harga, created_at, updated_at) FROM stdin;
    public          postgres    false    231   �k                 0    16657 	   komentars 
   TABLE DATA           p   COPY public.komentars (id, gambarmobil, gambarprofile, nama, job, komentar, created_at, updated_at) FROM stdin;
    public          postgres    false    233   �m                 0    16400 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   Bo                 0    16593    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   Np                 0    16625    pegawais 
   TABLE DATA           a   COPY public.pegawais (id, gambar, nama, alamat, nim, tgllhr, created_at, updated_at) FROM stdin;
    public          postgres    false    225   kp       !          0    16676 
   pembelians 
   TABLE DATA           �   COPY public.pembelians (id, email_address, card_number, card_holder_name, expiration_date, cvv, country, zip_code, created_at, updated_at) FROM stdin;
    public          postgres    false    237   �q                 0    16613    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   Zr                 0    16667    unggulan_mobils 
   TABLE DATA           X   COPY public.unggulan_mobils (id, gambarmobil, nama, created_at, updated_at) FROM stdin;
    public          postgres    false    235   wr                 0    16582    users 
   TABLE DATA              COPY public.users (id, name, email, email_verified_at, password, usertype, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   cs       3           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            4           0    0    galeris_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.galeris_id_seq', 10, true);
          public          postgres    false    226            5           0    0    headers_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.headers_id_seq', 1, true);
          public          postgres    false    228            6           0    0    jualans_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.jualans_id_seq', 15, true);
          public          postgres    false    230            7           0    0    komentars_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.komentars_id_seq', 7, true);
          public          postgres    false    232            8           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 32, true);
          public          postgres    false    215            9           0    0    pegawais_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.pegawais_id_seq', 5, true);
          public          postgres    false    224            :           0    0    pembelians_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.pembelians_id_seq', 4, true);
          public          postgres    false    236            ;           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            <           0    0    unggulan_mobils_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.unggulan_mobils_id_seq', 8, true);
          public          postgres    false    234            =           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 4, true);
          public          postgres    false    217            f           2606    16609    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            h           2606    16611 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            q           2606    16637    galeris galeris_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.galeris
    ADD CONSTRAINT galeris_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.galeris DROP CONSTRAINT galeris_pkey;
       public            postgres    false    227            s           2606    16646    headers headers_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.headers
    ADD CONSTRAINT headers_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.headers DROP CONSTRAINT headers_pkey;
       public            postgres    false    229            u           2606    16655    jualans jualans_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.jualans
    ADD CONSTRAINT jualans_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.jualans DROP CONSTRAINT jualans_pkey;
       public            postgres    false    231            w           2606    16664    komentars komentars_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.komentars
    ADD CONSTRAINT komentars_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.komentars DROP CONSTRAINT komentars_pkey;
       public            postgres    false    233            ^           2606    16405    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            d           2606    16599 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            o           2606    16630    pegawais pegawais_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.pegawais
    ADD CONSTRAINT pegawais_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.pegawais DROP CONSTRAINT pegawais_pkey;
       public            postgres    false    225            {           2606    16683    pembelians pembelians_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.pembelians
    ADD CONSTRAINT pembelians_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.pembelians DROP CONSTRAINT pembelians_pkey;
       public            postgres    false    237            j           2606    16620 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            l           2606    16623 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            y           2606    16674 $   unggulan_mobils unggulan_mobils_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.unggulan_mobils
    ADD CONSTRAINT unggulan_mobils_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.unggulan_mobils DROP CONSTRAINT unggulan_mobils_pkey;
       public            postgres    false    235            `           2606    16592    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            b           2606    16590    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            m           1259    16621 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223                  x������ � �         b  x�m��n�0�g��@N�\�**�BM;T��49"n���]��a�Э+��&5��3x����_d�a�Vۥ~��$�)<�V?���~��	1�����H29m��ƍ�s��+���6lj�&����2+����)33���<�tF��J��9´���FC�:�ٌ�w4�&CYVY�0�y����E�J�=O�-ޑO*@Q�"��B�K��ܾ�x�O��J��J�s?;uf2��J��� �S��A�oz��`C<��F0�d��iV�E-|�E��b#Nh]���Y2N'X�u;C�	!�y��B�.#�gYn�����,�X�I�z���L�Z�/���#n;4h�\���!�����         c   x�3�447�45077���HMLI-��*H��K-Wp,�,K��M-JNMI-�t�u�4�300�10�4202�50�52S04�"C�����������)W� :��         �  x�}�Oo�0��)8��F������F[�)�!M{��P�6�"��J?�l�D@��~~���F�@4��̳��s9.����p;��=�����Xl��C��9 ���-ķ�#�-�E5ʴe�p}�$����u �+�ݹ�w��l�$��H�,���/!	<�Ȥ��޺��\�yG _�1�<
7X�Þ]��]K�q�J^�cMqnz\�����W�pE�Ym:V��D��Bs�ލ)N7թ:fO�c��NY#��YԄ��T�w%ea�5ԍ9�3*(m��,���i�փ�6a�h=�=���ha.i$��LK���G���<��T^��L<����Kڊ��#��3�P����>�ps�d�����@���@��/����O��*+�e�^\=�Cu��+B�旐X��%�{��%�2��X���c!	)Gl��)�1%��Xe�e�ǂs�Nz.         e  x�m��n�0���g��@E�ss�b1K�K��V�@!-l��W�P`#��!��z��4`�ڔ}�E,��J�ג'�a�����ױ�U�s�p�#	��B��G]��Q���w��Jq${��������A��]���8��-�����![���׳�c�K����-�3�Ж��i��j�n�j��D\�S3�)�'�r�`SW�wZȓ�bLj=�����9��ȼ�ٝ�k�����<��m)d4�ּ!�2U�j�����MG�>�'�r�%��OPX��_���{됮�U��}�3��`�R����=�����������ë�
�Y�a*Z�>蛿n��i8&� ��������,����O         �   x�e��n�0D�7Sٹp��J���HE@��]-	j��gbk�iЖ�"]�K<�/�ڣ��6�ܜ�:�h	�P�=�W�M.d��)I��?�3�)D�l)�!Kᴇ�%h�Ћ�'/�CW���1��㙔*��=q�K�����{ @hu��#?y*�:�Hh��g��^֒m2k��:����eSmɢq�'{��sQ�@f]�*Vֽ�G�eٸ�l���I��Z�qO�i��ߞZ}�4R�s%s'~ʅ�����M_��            x������ � �         I  x�m��j�0е��9�l/KK m�$)�̔ȮE�]��ׯ�䱰���a�
SɕJ���
C�8�9���a��a�zG����.iK��u�j[�{C�`I;r��&����R��|�8D�E1D� ���w*�Qw�ę��|E�ڌ�!V��m+����l�vµ6Ԑ��.S�	���BLn!��BP��I�ȟ����3����m��-�"�_�j�:x����$���\F�I�quk���i���9��!ª����.k�vG_��S�����ëI�f�8�iN��Q���|{ ��&.|������W��{�����1��6��      !   �   x�3�LIL�I��+�K/-.JtH�M���K���4262126�t+P)N̫Tp)�442cϼ�����L��������������������	61.#��idej�M�����&@kq�ih�l'��f����!61�=... c
[�            x������ � �         �   x���͎�0��5�
n ��_�7��11.M�'X5�P$�Woc�(,ܞ����4	��e���b�8�M�]�CZ��%,>gTeL��s9������Ҕ��n"��E3�I�SM�S�J�-��)d���9�X�n@�3�rj��\���cj^ I�����0T�҇#��G\(-�x���ɦť�G8�G�!�1�������j�"����y��>���0���-!w�yo�         N  x�u�Ko�@F��+\�f��̪X,�*Q�f|�@�}M��tsor''bH����t�����Ҙ٘L�}��5��U���ΕzNfU<ҭ�{��v���(���̦ �8��z� ���H�C�E����!�$ə�L�GYg�<<gG�,��LPvN|�(/��A�|��m��:Y�yh����|�K�XT�{�D%V`h�$Qq���^f{Y��1ޛ���9�B�Kk�B����C����3�5L��5�s�bIƒ��X�>翔����Co��$3]�p�u�ǀ �����WؕV�	r(﵇��N�)*��#�0(a�ǲ�'ڞ�     