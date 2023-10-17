const tasks = list => list.join(" && ");

module.exports = {
  hooks: {
    "pre-commit": tasks([
      "echo committing as $(git config user.name)",
      "npm run lint:scripts",
      "npm run lint:php"
    ]),
    "post-commit": "bin/composer diagnose || true",
    "commit-msg": "commitlint -E HUSKY_GIT_PARAMS"
  }
};
