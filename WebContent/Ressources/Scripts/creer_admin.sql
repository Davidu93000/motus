/* Pour créer un nouvel admin, il suffit d'executer ce fichier en changeant l'ID par un ID non occupé, le nom et le mail */

INSERT INTO `utilisateurs` (`id`, `id_groupe`, `nom`, `prenom`, `email`, `mdp`, `date_naissance`, `pays`, `date_inscription`) VALUES
(1, 3, 'administrateur_1', NULL, 'admin_1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL);

