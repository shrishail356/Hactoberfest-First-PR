let userScore = 0;
let computerScore = 0;

const userScoreSpan = document.getElementById("user-score");
const computerScoreSpan = document.getElementById("computer-score");
const resultP = document.querySelector(".result > p");
const images = document.querySelector(".choices");

const messages = {
    win: document.getElementById("win"),
    lose: document.getElementById("lose"),
    draw: document.getElementById("draw"),
};

const actionMsg = document.getElementById("action-msg");

const choices = {
    rock: document.getElementById("r"),
    paper: document.getElementById("p"),
    scissor: document.getElementById("s"),
};

function getComputerChoice() {
    const choices = ["r", "p", "s"];
    return choices[Math.floor(Math.random() * choices.length)];
}

function formatChoice(c) {
    return c === "r" ? "Rock" : c === "p" ? "Paper" : "Scissors";
}

function updateScore() {
    userScoreSpan.textContent = userScore;
    computerScoreSpan.textContent = computerScore;
}

function showMessage(result, userChoice, computerChoice) {
    const smallU = "user".fontsize(3).sub();
    const smallC = "computer".fontsize(3).sub();
    let message = "";

    if (result === "win") {
        message = `${formatChoice(userChoice)}${smallU} beats ${formatChoice(computerChoice)}${smallC}. You Win!🍧`;
        messages.win.classList.remove("hidden");
        messages.lose.classList.add("hidden");
        messages.draw.classList.add("hidden");
    } else if (result === "lose") {
        message = `${formatChoice(computerChoice)}${smallC} beats ${formatChoice(userChoice)}${smallU}. You Lose! 🍼`;
        messages.win.classList.add("hidden");
        messages.lose.classList.remove("hidden");
        messages.draw.classList.add("hidden");
    } else {
        message = `${formatChoice(userChoice)}${smallU} equals ${formatChoice(computerChoice)}${smallC}. It's a Draw! 🍭`;
        messages.win.classList.add("hidden");
        messages.lose.classList.add("hidden");
        messages.draw.classList.remove("hidden");
    }

    resultP.innerHTML = message;
}

function game(userChoice) {
    const computerChoice = getComputerChoice();

    if (userChoice === computerChoice) {
        showMessage("draw", userChoice, computerChoice);
    } else if (
        (userChoice === "r" && computerChoice === "s") ||
        (userChoice === "p" && computerChoice === "r") ||
        (userChoice === "s" && computerChoice === "p")
    ) {
        userScore++;
        updateScore();
        showMessage("win", userChoice, computerChoice);
    } else {
        computerScore++;
        updateScore();
        showMessage("lose", userChoice, computerChoice);
    }
}

function main() {
    Object.entries(choices).forEach(([key, element]) => {
        element.addEventListener("click", () => game(key.charAt(0)));
    });
}

main();
