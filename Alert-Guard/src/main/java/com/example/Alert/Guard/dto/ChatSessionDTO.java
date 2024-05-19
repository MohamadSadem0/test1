package com.example.Alert.Guard.dto;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
@Data
@AllArgsConstructor
@NoArgsConstructor
public class ChatSessionDTO {
    private Long sessionId;
    private UserDTO user1;
    private UserDTO user2;
}