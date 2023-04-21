<?PHP
// ----------------------------------------------------------------------------
// Tabelle mit einigen World-Map-Informationen 
// ----------------------------------------------------------------------------
$tabWorldmaps = array(
                  "110010000" => array( "mapid" => "110010000", "name" => "Sanctum", "offiname" => "LC1"),
                  "110020000" => array( "mapid" => "110020000", "name" => "Kaisinel", "offiname" => "LC2"),
                  "110070000" => array( "mapid" => "110070000", "name" => "Kaisinel_academy", "offiname" => "Arena_L_Lobby"),
                  "120010000" => array( "mapid" => "120010000", "name" => "Pandaemonium", "offiname" => "DC1"),
                  "120020000" => array( "mapid" => "120020000", "name" => "Marchutan", "offiname" => "DC2"),
                  "120080000" => array( "mapid" => "120080000", "name" => "Marchutan_priory", "offiname" => "Arena_D_Lobby"),
                  "130090000" => array( "mapid" => "130090000", "name" => "Wisplight_abbey", "offiname" => "Arena_L_CLobby"),
                  "140010000" => array( "mapid" => "140010000", "name" => "Fatebound_abbey", "offiname" => "Arena_D_CLobby"),
                  "210010000" => array( "mapid" => "210010000", "name" => "Poeta", "offiname" => "LF1"),
                  "210020000" => array( "mapid" => "210020000", "name" => "Eltnen", "offiname" => "LF2"),
                  "210030000" => array( "mapid" => "210030000", "name" => "Verteron", "offiname" => "LF1A"),
                  "210040000" => array( "mapid" => "210040000", "name" => "Heiron", "offiname" => "LF3"),
                  "210050000" => array( "mapid" => "210050000", "name" => "Inggison", "offiname" => "LF4"),
                  "210060000" => array( "mapid" => "210060000", "name" => "Theobomos", "offiname" => "LF2A"),
                  "210070000" => array( "mapid" => "210070000", "name" => "Cygnea", "offiname" => "LF5"),
                  "210080000" => array( "mapid" => "210080000", "name" => "Griffoen", "offiname" => "LF5_Ship"),
                  "210090000" => array( "mapid" => "210090000", "name" => "Idian_depths_l", "offiname" => "LDF5_Under_L"),
                  "220010000" => array( "mapid" => "220010000", "name" => "Ishalgen", "offiname" => "DF1"),
                  "220020000" => array( "mapid" => "220020000", "name" => "Morheim", "offiname" => "DF2"),
                  "220030000" => array( "mapid" => "220030000", "name" => "Altgard", "offiname" => "DF1A"),
                  "220040000" => array( "mapid" => "220040000", "name" => "Beluslan", "offiname" => "DF3"),
                  "220050000" => array( "mapid" => "220050000", "name" => "Brusthonin", "offiname" => "DF2A"),
                  "220070000" => array( "mapid" => "220070000", "name" => "Gelkmaros", "offiname" => "DF4"),
                  "220080000" => array( "mapid" => "220080000", "name" => "Enshar", "offiname" => "DF5"),
                  "220090000" => array( "mapid" => "220090000", "name" => "Habrok", "offiname" => "DF5_Ship"),
                  "220100000" => array( "mapid" => "220100000", "name" => "Idian_depths_d", "offiname" => "LDF5_Under_D"),
                  "300010000" => array( "mapid" => "300010000", "name" => "No_zone_name", "offiname" => "IDAbPro"),
                  "300020000" => array( "mapid" => "300020000", "name" => "Id_test_dungeon", "offiname" => "IDTest_Dungeon"),
                  "300030000" => array( "mapid" => "300030000", "name" => "Nochsana_training_camp", "offiname" => "IDAb1_MiniCastle"),
                  "300040000" => array( "mapid" => "300040000", "name" => "Dark_poeta", "offiname" => "IDLF1"),
                  "300050000" => array( "mapid" => "300050000", "name" => "Asteria_chamber", "offiname" => "IDAbRe_Up_Asteria"),
                  "300060000" => array( "mapid" => "300060000", "name" => "Sulfur_tree_nest", "offiname" => "IDAbRe_Low_Divine"),
                  "300070000" => array( "mapid" => "300070000", "name" => "Chamber_of_roah", "offiname" => "IDAbRe_Up_Rhoo"),
                  "300080000" => array( "mapid" => "300080000", "name" => "Left_wing_chamber", "offiname" => "IDAbRe_Low_Wciel"),
                  "300090000" => array( "mapid" => "300090000", "name" => "Right_wing_chamber", "offiname" => "IDAbRe_Low_Eciel"),
                  "300100000" => array( "mapid" => "300100000", "name" => "Steel_rake", "offiname" => "IDshulackShip"),
                  "300110000" => array( "mapid" => "300110000", "name" => "Dredgion", "offiname" => "IDAb1_Dreadgion"),
                  "300120000" => array( "mapid" => "300120000", "name" => "Kysis_chamber", "offiname" => "IDAbRe_Up3_Dkisas"),
                  "300130000" => array( "mapid" => "300130000", "name" => "Miren_chamber", "offiname" => "IDAbRe_Up3_Lamiren"),
                  "300140000" => array( "mapid" => "300140000", "name" => "Krotan_chamber", "offiname" => "IDAbRe_Up3_Crotan"),
                  "300150000" => array( "mapid" => "300150000", "name" => "Udas_temple", "offiname" => "IDTemple_Up"),
                  "300160000" => array( "mapid" => "300160000", "name" => "Udas_temple_lower", "offiname" => "IDTemple_Low"),
                  "300170000" => array( "mapid" => "300170000", "name" => "Beshmundir_temple", "offiname" => "IDCatacombs"),
                  "300190000" => array( "mapid" => "300190000", "name" => "Talocs_hollow", "offiname" => "IDElim"),
                  "300200000" => array( "mapid" => "300200000", "name" => "Haramel", "offiname" => "IDNovice"),
                  "300210000" => array( "mapid" => "300210000", "name" => "Dredgion_of_chantra", "offiname" => "IDDreadgion_02"),
                  "300220000" => array( "mapid" => "300220000", "name" => "Abyssal_splinter", "offiname" => "IDAbRe_Core"),
                  "300230000" => array( "mapid" => "300230000", "name" => "Kromede_trial", "offiname" => "IDCromede"),
                  "300240000" => array( "mapid" => "300240000", "name" => "Aturam_sky_fortress", "offiname" => "IDStation"),
                  "300250000" => array( "mapid" => "300250000", "name" => "Esoterrace", "offiname" => "IDF4Re_Drana"),
                  "300280000" => array( "mapid" => "300280000", "name" => "Rentus_base", "offiname" => "IDYun"),
                  "300290000" => array( "mapid" => "300290000", "name" => "Test_mrt_idzone", "offiname" => "Test_MRT_IDZone"),
                  "300300000" => array( "mapid" => "300300000", "name" => "Empyrean_crucible", "offiname" => "IDArena"),
                  "300320000" => array( "mapid" => "300320000", "name" => "Crucible_challenge", "offiname" => "IDArena_Solo"),
                  "300350000" => array( "mapid" => "300350000", "name" => "Arena_of_chaos", "offiname" => "IDArena_pvp01"),
                  "300360000" => array( "mapid" => "300360000", "name" => "Arena_of_discipline", "offiname" => "IDArena_pvp02"),
                  "300420000" => array( "mapid" => "300420000", "name" => "Chaos_training_grounds", "offiname" => "IDArena_pvp01_T"),
                  "300430000" => array( "mapid" => "300430000", "name" => "Discipline_training_grounds", "offiname" => "IDArena_pvp02_T"),
                  "300440000" => array( "mapid" => "300440000", "name" => "Terath_dredgion", "offiname" => "IDDreadgion_03"),
                  "300450000" => array( "mapid" => "300450000", "name" => "Arena_of_harmony", "offiname" => "IDArena_Team01"),
                  "300460000" => array( "mapid" => "300460000", "name" => "Steel_rake_cabin", "offiname" => "IDshulackShip_Solo"),
                  "300480000" => array( "mapid" => "300480000", "name" => "Sealed_danuar_mysticarium", "offiname" => "IDLDF5RE_Solo"),
                  "300510000" => array( "mapid" => "300510000", "name" => "Tiamat_stronghold", "offiname" => "IDTiamat_1"),
                  "300520000" => array( "mapid" => "300520000", "name" => "Dragon_lord_refuge", "offiname" => "IDTiamat_2"),
                  "300540000" => array( "mapid" => "300540000", "name" => "Eternal_bastion", "offiname" => "IDLDF5b_TD"),
                  "300550000" => array( "mapid" => "300550000", "name" => "Arena_of_glory", "offiname" => "IDArena_Glory"),
                  "300560000" => array( "mapid" => "300560000", "name" => "Shugo_imperial_tomb", "offiname" => "IDDF2Flying_Event01"),
                  "300570000" => array( "mapid" => "300570000", "name" => "Harmony_training_ground", "offiname" => "IDArena_Team01_T"),
                  "300590000" => array( "mapid" => "300590000", "name" => "Ophidan_bridge", "offiname" => "IDLDF5_Under_01"),
                  "300600000" => array( "mapid" => "300600000", "name" => "Unstable_abyssal_splinter", "offiname" => "IDAbRe_Core_02"),
                  "300610000" => array( "mapid" => "300610000", "name" => "Raksang_ruins", "offiname" => "IDRaksha_solo"),
                  "300620000" => array( "mapid" => "300620000", "name" => "Occupied_rentus_base", "offiname" => "IDYun_Hard"),
                  "300630000" => array( "mapid" => "300630000", "name" => "Anguished_dragon_lord_refuge", "offiname" => "IDTiamat_2_Hard"),
                  "300700000" => array( "mapid" => "300700000", "name" => "The_hexway", "offiname" => "IDUnderpassRe"),
                  "300800000" => array( "mapid" => "300800000", "name" => "Infinity_shard", "offiname" => "IDRuneweapon"),
                  "301100000" => array( "mapid" => "301100000", "name" => "Unity_training_grounds", "offiname" => "IDArena_Team01_T2"),
                  "301110000" => array( "mapid" => "301110000", "name" => "Danuar_reliquary", "offiname" => "IDLDF5_Under_Rune"),
                  "301120000" => array( "mapid" => "301120000", "name" => "Kamar_battlefield", "offiname" => "IDKamar"),
                  "301130000" => array( "mapid" => "301130000", "name" => "Sauro_supply_base", "offiname" => "IDVritra_Base"),
                  "301140000" => array( "mapid" => "301140000", "name" => "Seized_danuar_sanctuary", "offiname" => "IDLDF5_Under_02"),
                  "301150000" => array( "mapid" => "301150000", "name" => "Asteria_iu_solo", "offiname" => "IDAsteria_IU_Solo"),
                  "301160000" => array( "mapid" => "301160000", "name" => "Nightmare_circus", "offiname" => "IDAsteria_IU_Party"),
                  "301200000" => array( "mapid" => "301200000", "name" => "Rukibuki_circus_troupe_camp", "offiname" => "IDAsteria_IU_World"),
                  "301210000" => array( "mapid" => "301210000", "name" => "Engulfed_ophidan_bridge", "offiname" => "IDLDF5_Under_01_War"),
                  "301220000" => array( "mapid" => "301220000", "name" => "Iron_wall_warfront", "offiname" => "IDF5_TD_War"),
                  "301230000" => array( "mapid" => "301230000", "name" => "Illuminary_obelisk", "offiname" => "IDLDF5_Under_03"),
                  "301240000" => array( "mapid" => "301240000", "name" => "Legion_kysis_barracks", "offiname" => "IDAbRe_Up3_Dkisas_02"),
                  "301250000" => array( "mapid" => "301250000", "name" => "Legion_miren_barracks", "offiname" => "IDAbRe_Up3_Lamiren_02"),
                  "301260000" => array( "mapid" => "301260000", "name" => "Legion_krotan_barracks", "offiname" => "IDAbRe_Up3_Crotan_02"),
                  "301270000" => array( "mapid" => "301270000", "name" => "Linkgate_foundry", "offiname" => "IDLDF4Re_01"),
                  "301280000" => array( "mapid" => "301280000", "name" => "Kysis_barracks", "offiname" => "IDAbRe_Up3_Dkisas_02_N"),
                  "301290000" => array( "mapid" => "301290000", "name" => "Miren_barracks", "offiname" => "IDAbRe_Up3_Lamiren_02_N"),
                  "301300000" => array( "mapid" => "301300000", "name" => "Krotan_barracks", "offiname" => "IDAbRe_Up3_Crotan_02_N"),
                  "301310000" => array( "mapid" => "301310000", "name" => "Idgel_dome", "offiname" => "IDLDF5_Fortress_Re"),
                  "301320000" => array( "mapid" => "301320000", "name" => "Lucky_ophidan_bridge", "offiname" => "IDLDF5_Under_01_PC"),
                  "301330000" => array( "mapid" => "301330000", "name" => "Lucky_danuar_reliquary", "offiname" => "IDLDF5_Under_Rune_PC"),
                  "301340000" => array( "mapid" => "301340000", "name" => "Linkgate_foundry_q", "offiname" => "IDLDF4Re_01_Q"),
                  "301360000" => array( "mapid" => "301360000", "name" => "Infernal_danuar_reliquary", "offiname" => "IDLDF5_Under_Rune_H"),
                  "301370000" => array( "mapid" => "301370000", "name" => "Infernal_illuminary_obelisk", "offiname" => "IDLDF5_Under_03_H"),
                  "301380000" => array( "mapid" => "301380000", "name" => "Danuar_sanctuary", "offiname" => "IDLDF5_Under_02_E"),
                  "301390000" => array( "mapid" => "301390000", "name" => "Drakenspire_depths", "offiname" => "IDSeal"),
                  "301400000" => array( "mapid" => "301400000", "name" => "The_shugo_emperor_vault", "offiname" => "IDSweep"),
                  "301500000" => array( "mapid" => "301500000", "name" => "Stonespear_reach", "offiname" => "IDLegion"),
                  "301510000" => array( "mapid" => "301510000", "name" => "Sealed Argent Manor", "offiname" => "IDELEMENTAL_2_E"), // neu in 4.9
                  "301520000" => array( "mapid" => "301520000", "name" => "Drakenspire Depths", "offiname" => "IDSEAL_Q"),         // neu in 4.9
                  "310010000" => array( "mapid" => "310010000", "name" => "Karamatis_a", "offiname" => "IDAbProL1"),
                  "310020000" => array( "mapid" => "310020000", "name" => "Karamatis_b", "offiname" => "IDAbProL2"),
                  "310030000" => array( "mapid" => "310030000", "name" => "Aerdina", "offiname" => "IDAbGateL1"),
                  "310040000" => array( "mapid" => "310040000", "name" => "Geranaia", "offiname" => "IDAbGateL2"),
                  "310050000" => array( "mapid" => "310050000", "name" => "Aetherogenetics_lab", "offiname" => "IDLF3Lp"),
                  "310060000" => array( "mapid" => "310060000", "name" => "Fragment_of_darkness", "offiname" => "IDLF1B"),
                  "310070000" => array( "mapid" => "310070000", "name" => "Sliver_of_darkness", "offiname" => "IDLF1B_Stigma"),
                  "310080000" => array( "mapid" => "310080000", "name" => "Sanctum_underground_arena", "offiname" => "IDLC1_arena"),
                  "310090000" => array( "mapid" => "310090000", "name" => "Indratu_fortress", "offiname" => "IDLF3_Castle_indratoo"),
                  "310100000" => array( "mapid" => "310100000", "name" => "Azoturan_fortress", "offiname" => "IDLF3_Castle_Lehpar"),
                  "310110000" => array( "mapid" => "310110000", "name" => "Theobomos_lab", "offiname" => "IDLF2a_Lab"),
                  "310120000" => array( "mapid" => "310120000", "name" => "Ataxiar_a", "offiname" => "IDAbProL3"),
                  "320010000" => array( "mapid" => "320010000", "name" => "Ataxiar_b", "offiname" => "IDAbProD1"),
                  "320020000" => array( "mapid" => "320020000", "name" => "Ataxiar_c", "offiname" => "IDAbProD2"),
                  "320030000" => array( "mapid" => "320030000", "name" => "Bregirun", "offiname" => "IDAbGateD1"),
                  "320040000" => array( "mapid" => "320040000", "name" => "Nidalber", "offiname" => "IDAbGateD2"),
                  "320050000" => array( "mapid" => "320050000", "name" => "Arkanis_temple", "offiname" => "IDDF2Flying"),
                  "320060000" => array( "mapid" => "320060000", "name" => "Space_of_oblivion", "offiname" => "IDDF1B"),
                  "320070000" => array( "mapid" => "320070000", "name" => "Space_of_destiny", "offiname" => "IDSpace"),
                  "320080000" => array( "mapid" => "320080000", "name" => "Draupnir_cave", "offiname" => "IDDF3_Dragon"),
                  "320090000" => array( "mapid" => "320090000", "name" => "Triniel_underground_arena", "offiname" => "IDDC1_arena"),
                  "320100000" => array( "mapid" => "320100000", "name" => "Fire_temple", "offiname" => "IDDF2_Dflame"),
                  "320110000" => array( "mapid" => "320110000", "name" => "Alquimia_research_center", "offiname" => "IDDF3_LP"),
                  "320120000" => array( "mapid" => "320120000", "name" => "Shadow_court_dungeon", "offiname" => "IDDC1_Arena_3F"),
                  "320130000" => array( "mapid" => "320130000", "name" => "Adma_stronghold", "offiname" => "IDDf2a_Adma"),
                  "320140000" => array( "mapid" => "320140000", "name" => "Ataxiar_d", "offiname" => "IDAbProD3"),
                  "320150000" => array( "mapid" => "320150000", "name" => "Padmarashka_cave", "offiname" => "IDDramata_01"),
                  "400010000" => array( "mapid" => "400010000", "name" => "Reshanta", "offiname" => "Ab1"),
                  "400020000" => array( "mapid" => "400020000", "name" => "Belus", "offiname" => "Gab1_01"),
                  "400030000" => array( "mapid" => "400030000", "name" => "Transidium_annex", "offiname" => "GAb1_Sub"),
                  "400040000" => array( "mapid" => "400040000", "name" => "Aspida", "offiname" => "Gab1_02"),
                  "400050000" => array( "mapid" => "400050000", "name" => "Atanatos", "offiname" => "Gab1_03"),
                  "400060000" => array( "mapid" => "400060000", "name" => "Disillon", "offiname" => "Gab1_04"),
                  "510010000" => array( "mapid" => "510010000", "name" => "De_prison", "offiname" => "LF_Prison"),
                  "520010000" => array( "mapid" => "520010000", "name" => "Df_prison", "offiname" => "DF_Prison"),
                  "600010000" => array( "mapid" => "600010000", "name" => "Silentera_canyon", "offiname" => "Underpass"),
                  "600080000" => array( "mapid" => "600080000", "name" => "Live_party_concert_all", "offiname" => "IDIU"),
                  "600090000" => array( "mapid" => "600090000", "name" => "Kaldor", "offiname" => "LDF5_Fortress"),
                  "600100000" => array( "mapid" => "600100000", "name" => "Levinshor", "offiname" => "LDF4_Advance"),
                  "700010000" => array( "mapid" => "700010000", "name" => "Oriel", "offiname" => "Housing_LF_personal"),
                  "700020000" => array( "mapid" => "700020000", "name" => "Housing_lc_legion", "offiname" => "Housing_LC_legion"),
                  "710010000" => array( "mapid" => "710010000", "name" => "Pernon", "offiname" => "Housing_DF_personal"),
                  "710020000" => array( "mapid" => "710020000", "name" => "Housing_dc_legion", "offiname" => "Housing_DC_legion"),
                  "720010000" => array( "mapid" => "720010000", "name" => "Oriel_studio", "offiname" => "housing_idlf_personal"),
                  "730010000" => array( "mapid" => "730010000", "name" => "Pernon_studio", "offiname" => "housing_iddf_personal"),
                  "900020000" => array( "mapid" => "900020000", "name" => "Test_basic", "offiname" => "Test_Basic"),
                  "900030000" => array( "mapid" => "900030000", "name" => "Test_server", "offiname" => "Test_Server"),
                  "900100000" => array( "mapid" => "900100000", "name" => "Test_giantmonster", "offiname" => "Test_GiantMonster"),
                  "900110000" => array( "mapid" => "900110000", "name" => "Housing_barrack", "offiname" => "Housing_barrack"),
                  "900120000" => array( "mapid" => "900120000", "name" => "Test_empyrean_crucible", "offiname" => "Test_IDArena"),
                  "900130000" => array( "mapid" => "900130000", "name" => "Idldf5re_test", "offiname" => "IDLDF5RE_test"),
                  "900140000" => array( "mapid" => "900140000", "name" => "Test_kgw", "offiname" => "Test_Kgw"),
                  "900150000" => array( "mapid" => "900150000", "name" => "Test_basic_mj", "offiname" => "Test_Basic_Mj"),
                  "900160000" => array( "mapid" => "900160000", "name" => "Kamar_test", "offiname" => "N"),          // entf. seit 4.9
                  "900170000" => array( "mapid" => "900170000", "name" => "Test_intro", "offiname" => "test_intro"),
                  "900180000" => array( "mapid" => "900180000", "name" => "Test_server_art", "offiname" => "Test_server_art"),
                  "900190000" => array( "mapid" => "900190000", "name" => "Test_tag_match", "offiname" => "Test_TagMatch"),
                  "900200000" => array( "mapid" => "900200000", "name" => "Test_time_attack", "offiname" => "test_timeattack"),
                  "900210000" => array( "mapid" => "900210000", "name" => "IdTournament Stage Test", "offiname" => "IDTOURNAMENT_ATGE_TEST"), // neu in 4.9
                  "900220000" => array( "mapid" => "900220000", "name" => "System_basic", "offiname" => "System_Basic"),
                  "900230000" => array( "mapid" => "900230000", "name" => "Idtournament Lobby Test", "offiname" => "IDTOURNAMENT_LOBBY_TEST") // neu in 4.9
                );
?>