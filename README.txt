

  LC_ALL=C find . -type f -exec sed -i '' 's/bootstrap_barrio_subtheme/cityad_drupal_theme/g' {} +

  git remote set-url  --add     --push origin git@github.com:wasya-co/cityad_drupal_theme.git

  git tag -a v0.0.1 -m "Release v0.0.1"
  git push origin v0.0.1
